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
        $this->publishComponents();

        $this->createPages();
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
        $this->line('<fg=yellow;>Publishing Components...</>');

        $path = resource_path('views/components/');

        if (!File::isDirectory($path . 'modal')) {
            File::makeDirectory($path . 'modal');
        }

        copy(__DIR__ . '/../../../resources/views/builder/modal/base.blade.php', resource_path('views/components/modal/base.blade.php'));
        copy(__DIR__ . '/../../../resources/views/builder/modal/confirmation.blade.php', resource_path('views/components/modal/confirmation.blade.php'));
        copy(__DIR__ . '/../../../resources/views/builder/modal/dialog.blade.php', resource_path('views/components/modal/dialog.blade.php'));


        $this->info("done \n");
    }
}