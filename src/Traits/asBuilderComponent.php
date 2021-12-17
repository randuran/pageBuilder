<?php

namespace Randyduran\Pagebuilder\Traits;

use Illuminate\Http\Request;

trait asBuilderComponent
{
    public $component;
    public $container;
    public $component_id;
    public $option = [];

    /**
     * Emit the content when it changes
     *
     * @return void
     */
    public function updated()
    {
        $this->emitUp('componentUpdated', [
            'container_id' => $this->container->id,
            'options' => json_encode($this->option)
        ]);

        $this->container->refresh();
        // $this->container->update(['options' => json_encode($this->option)]);
    }

    final public function mount($container)
    {
        $this->container = $container;
        $this->component = $container->component;
        if ($container->draft !== null && auth()->user() !== null) {
            $this->option = json_decode($container->draft, true);
        } else {
            $this->option = json_decode($container->options, true);
        }
    }

    final public function remove()
    {
        $this->container->delete();
        $this->emitUp('refresh');
    }

    final public function newComponent()
    {
        $this->emitUp('insertComponent');
    }

    final public function toggleStatus()
    {

        $this->container->update([
            'status' => $this->container->status ? 0 : 1,
        ]);

        $this->notify($this->container->status ? 'publish' : 'Unpublished');
        $this->container->refresh();
    }
}