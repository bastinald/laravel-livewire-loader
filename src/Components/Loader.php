<?php

namespace Bastinald\LaravelLivewireLoader\Components;

use Livewire\Component;

class Loader extends Component
{
    public function render()
    {
        return view('laravel-livewire-loader::loader');
    }
}
