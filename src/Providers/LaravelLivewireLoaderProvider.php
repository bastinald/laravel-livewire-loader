<?php

namespace Bastinald\LaravelLivewireLoader\Providers;

use Bastinald\LaravelLivewireLoader\Components\Loader;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LaravelLivewireLoaderProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../views', 'laravel-livewire-loader');

        $this->publishes(
            [__DIR__ . '/../../views' => resource_path('views/vendor/laravel-livewire-loader')],
            'laravel-livewire-loader'
        );

        Livewire::component('loader', Loader::class);
    }
}
