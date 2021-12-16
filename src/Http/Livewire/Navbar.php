<?php

namespace Randyduran\Pagebuilder\Http\Livewire;

use Livewire\Component;
use Randyduran\Pagebuilder\Models\Component as ModelsComponent;

final class Navbar extends Component
{
    public $menu = [];
    public function render()
    {
        return view('pagebuilder::livewire.navbar')->layout('pagebuilder::layouts.navbar');
    }
}