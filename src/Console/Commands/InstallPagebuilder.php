<?php

namespace Randyduran\Pagebuilder\Console\Commands;

use Illuminate\Console\Command;
use Randyduran\Pagebuilder\Models\Page;
use File;

final class InstallPagebuilder extends Command
{

    protected $signature = 'builder:install';
    protected $description = 'Syncronize component list';

    public function handle()
    {
        $this->info("Installing Page Builder... 🛠\n");
        $this->setup();
        $this->createPages();
    }

    public function setup()
    {
        File::delete(resource_path('sass/app.scss'));

        if (!$this->configExists('builder.php')) {
            $this->publishConfiguration();
            $this->info('Published configuration');
        }
    }

    /**
     * Create Page builder required pages
     *
     * @return void
     */
    protected function createPages()
    {
        $homeExist = Page::whereTitle('home')->first();

        if (!$homeExist) {
            Page::create([
                'title' => 'home',
                'slug' => '/',
                'status' => true,
            ]);
        }
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