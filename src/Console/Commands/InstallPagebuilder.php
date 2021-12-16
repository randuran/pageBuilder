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
        $this->publishComponents();

        $this->createPages();
    }

    public function setup()
    {
        File::delete(resource_path('sass/app.scss'));
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

    /**
     * Publish page builder components
     *
     * @return void
     */
    protected function publishComponents()
    {
        $this->info("done \n");
    }
}