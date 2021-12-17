<?php

namespace Randyduran\Pagebuilder\Http\Livewire;

use Randyduran\Pagebuilder\Models\Component as BuilderComponent;
use Randyduran\Pagebuilder\Models\Page as ModelPage;
use Randyduran\Pagebuilder\Models\Container;
use Illuminate\Http\Request;
use Livewire\Component;

final class Page extends Component
{
    public $componentSelector = false;
    public $search = '';
    public $menu = [];
    public $page;
    public $mustSave = false;

    protected $listeners = ['refresh', 'insertComponent', 'componentUpdated'];

    /**
     * Get the current page
     *
     * @param String $page
     * @return void
     */
    public function mount(Request $request)
    {
        $request_path = $request->path();

        //If the request contains just an slash then in index
        if ($request_path == '/') {
            $path = '/';
        } else {
            $path = explode('/', $request_path);
        }

        $this->page = ModelPage::whereSlug($path)->first();

        if (!isset($this->page)) return;

        $unsaved = $this->page->containers->where('draft');

        if ($unsaved->count()) {
            $this->mustSave = true;
        }
    }

    public function insertComponent()
    {
        $this->componentSelector = true;
    }

    /**
     * Undocumented function
     *
     * @param [type] $component
     * @return void
     */
    public function assignComponent($component)
    {
        $container = [
            'page_id' => $this->page->id,
            'component_id' => $component['id'],
            'options' => json_encode($component['options']),
            'position' => $this->page->containers()->max('position') + 1,
        ];

        Container::create($container);
        $this->page->refresh();

        $this->componentSelector = false;
    }


    /**
     * Refresh page when recieved a request from a component
     *
     * @return void
     */
    public function refresh()
    {
        $this->notify('removed');
        $this->page->refresh();
    }

    /**
     * Storage changes in draft until page is save
     *
     * @param [type] $data
     * @return void
     */
    public function componentUpdated($data)
    {

        $container = Container::find($data['container_id']);


        $container->update([
            'draft' => $data['options'],
        ]);

        $this->mustSave = true;

        $container->refresh();
    }


    public function updatePage()
    {
        $containers = $this->page->containers;

        foreach ($containers as $container) {
            if ($container->draft != null) {
                $container->update([
                    'options' => $container->draft,
                    'draft' => null,
                ]);
            }
        }

        $this->mustSave = false;

        $this->notify('page was updated');
    }


    public function render()
    {
        return view('pagebuilder::livewire.page', [
            'searchResult' => BuilderComponent::search('name', $this->search)->get(),
        ])->layout('pagebuilder::layouts.pagebuilder');
    }
}