<?php

namespace Randyduran\Pagebuilder\Http\Livewire;

use Livewire\Component;
use Randyduran\Pagebuilder\Models\Component as ModelsComponent;

final class Sidebar extends Component
{

    public $page;

    public function mount($page)
    {
        $this->page = $page;
    }
    public function render()
    {
        return view('pagebuilder::livewire.sidebar', [
            'components' => ModelsComponent::all(),
        ])->layout('pagebuilder::layouts.pagebuilder');
    }
}