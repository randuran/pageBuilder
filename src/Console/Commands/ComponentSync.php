<?php

namespace Randyduran\Pagebuilder\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Randyduran\Pagebuilder\Models\Component;

class ComponentSync extends Command
{

    protected $signature = 'builder:update';
    protected $description = 'Syncronize component list';

    public function handle()
    {
        $this->sync();
        $this->info("Enjoy building your website 😉 \n");
    }

    public function sync()
    {
        $components = Config::get('builder.components');

        if (count($components) == 0) {
            $this->info('No components found');
            return;
        }
        foreach ($components as $component) {
            if (isset($component['name'])) {
                $exist = Component::where('name', $component['name'])->first();
                if (!$exist) {
                    $this->info("Publishing {$component['name']} \n");
                    Component::create($component);
                }
            }
        }
    }
}