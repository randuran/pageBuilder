<?php

namespace Randyduran\Pagebuilder\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Randyduran\Pagebuilder\Models\Component;

class ComponentSync extends Command
{

    protected $signature = 'builder:sync';
    protected $description = 'Syncronize component list';

    public function handle()
    {

        $this->info("Enjoy building your website 😉 \n");
        if (!$this->configExists('builder.php')) {
            $this->publishConfiguration();
            // $this->info('Published configuration');
        }

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
            $exist = Component::where('name', $component['name'])->first();

            if (!$exist) {
                Component::create($component);
            }
        }
    }

    private function configExists($fileName)
    {
        return File::exists(config_path($fileName));
    }

    private function publishConfiguration($forcePublish = false)
    {
        $params = [
            '--provider' => "Randyduran\Pagebuilder\Providers\PageBuilderServiceProvider",
            '--tag' => "builder-config"
        ];

        if ($forcePublish === true) {
            $params['--force'] = true;
        }

        $this->call('vendor:publish', $params);
    }
}