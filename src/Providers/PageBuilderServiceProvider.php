<?php

namespace Randyduran\Pagebuilder\Providers;

use Randyduran\Pagebuilder\Http\Middleware\CheckIfPageExist;
use Randyduran\Pagebuilder\Console\Commands\InstallPagebuilder;
use Randyduran\Pagebuilder\Console\Commands\ComponentSync;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\App;

class PageBuilderServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Livewire\Component::macro('notify', function ($message) {
            $this->dispatchBrowserEvent('notify', $message);
        });

        Builder::macro('search', function ($field, $string) {
            return $string ? $this->where($field, 'like', '%' . $string . '%') : $this;
        });

        $this->publishing();
        $this->pageBuilderLoader();
        $this->middleware();
        $this->registerComponents();
        $this->registerLivewireComponents();
        $this->registerCommands();
    }


    /**
     * Configure the Pagebuilder Blade components.
     *
     * @return void
     */
    protected function registerComponents()
    {

        //Navbar
        $this->registerComponent('navbar.navbar', 'navbar');
        $this->registerComponent('navbar.top-navigation', 'topbar');

        //Notifications
        $this->registerComponent('notification.notify', 'notify');

        //Builder
        $this->registerComponent('component.mode', 'mode');
        $this->registerComponent('component.new', 'new');
        $this->registerComponent('component.toolbar', 'toolbar');
        $this->registerComponent('component.component', 'component');

        //Modal
        $this->registerComponent('modal.base', 'baseModal');
        $this->registerComponent('modal.component-modal', 'componentModal');

        //EDITOR
        $this->registerComponent('editor.text', 'textEditor');
        $this->registerComponent('editor.editable', 'editable');
        $this->registerComponent('editor.linkable', 'linkable');

        //Tools
        $this->registerComponent('tool.editable-bar', 'editableBar');
        $this->registerComponent('tool.editable-button', 'editableButton');
        $this->registerComponent('tool.dropdown', 'tool-dropdown');
        $this->registerComponent('button.tool', 'toolbar-item');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function register()
    {
    }


    /**
     * Register artisan commands
     *
     * @return void
     */
    public function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ComponentSync::class,
                InstallPagebuilder::class,
            ]);
        }
    }

    protected function publishing()
    {
        $this->publishes([
            __DIR__ . '/../config/builder.php' => config_path('builder.php')
        ], 'builder-config');

        $this->publishes([
            __DIR__ . '/../../resources/views/layouts/pagebuilder.blade.php' => resource_path('views/layouts/pagebuilder.blade.php')
        ], 'builder-layout');
    }

    protected function pageBuilderLoader()
    {
        App::booted(function () {
            $this->loadRoutesFrom(__DIR__ . '/../../routes/builder.php');
        });

        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'pagebuilder');
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'pagebuilder');
    }

    protected function middleware()
    {
        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('checkPage', CheckIfPageExist::class);
    }

    /**
     * Register livewire components
     *
     * @return void
     */
    protected function registerLivewireComponents()
    {
        \Livewire\Livewire::component('builder', \Randyduran\Pagebuilder\Http\Livewire\Page::class);
        \Livewire\Livewire::component('navbar', \Randyduran\Pagebuilder\Http\Livewire\Navbar::class);
        \Livewire\Livewire::component('sidebar', \Randyduran\Pagebuilder\Http\Livewire\Sidebar::class);
    }


    /**
     * Register the given component.
     *
     * @param  string  $path
     * @param  string $alias
     * @return void
     */
    protected function registerComponent(string $component, string $alias)
    {
        Blade::component('pagebuilder::builder.' . $component, 'builder.' . $alias);
    }
}