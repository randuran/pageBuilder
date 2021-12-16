<?php

namespace Randyduran\Pagebuilder\Http\Livewire;

use Livewire\Component;
use Randyduran\Pagebuilder\Models\Component as ModelsComponent;

final class Sidebar extends Component
{
    public function render()
    {
        return view('pagebuilder::livewire.sidebar', [
            'components' => ModelsComponent::all(),
        ])->layout('pagebuilder::layouts.pagebuilder');
    }
}