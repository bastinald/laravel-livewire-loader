<?php

namespace Bastinald\LaravelLivewireLoader\Providers;

use Bastinald\LaravelLivewireLoader\Components\Loader;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LaravelLivewireLoaderProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'laravel-livewire-loader');

        $this->publishes(
            [__DIR__ . '/../../config/laravel-livewire-loader.php' => config_path('laravel-livewire-loader.php')],
            ['laravel-livewire-loader', 'laravel-livewire-loader:config']
        );

        $this->publishes(
            [__DIR__ . '/../../resources/views' => resource_path('views/vendor/laravel-livewire-loader')],
            ['laravel-livewire-loader', 'laravel-livewire-loader:views']
        );

        Livewire::component('loader', Loader::class);
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/laravel-livewire-loader.php', 'laravel-livewire-loader');
    }
}
