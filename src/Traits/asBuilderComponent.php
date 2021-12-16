<?php

namespace Randyduran\Pagebuilder\Traits;

use Illuminate\Http\Request;

trait asBuilderComponent
{
    public $component;
    public $container;
    public $component_id;
    public $option = [];

    public $content = [
        'key' => '',
        'old' => '',
        'new' => '',
    ];

    public function updated()
    {
        $this->container->update(['options' => json_encode($this->option)]);
    }

    final public function mount($container)
    {
        $this->container = $container;
        $this->component = $container->component;
        $this->option = json_decode($container->options, true);
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

    final public function updateContent()
    {
        if ($this->content['new'] == '') {
            $this->option[$this->content['key']]['content'] = $this->content['old'];
        } else {
            $this->option[$this->content['key']]['content'] = $this->content['new'];
        }

        $this->container->update(
            ['options' => json_encode($this->option)],
        );
    }
}