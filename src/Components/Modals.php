<?php

namespace Arsamme\LaravelLivewireModals\Components;

use Livewire\Component;

class Modals extends Component
{
    public $alias;
    public $params = [];

    protected $listeners = ['showModal', 'resetModal'];

    public function render()
    {
        return view('laravel-livewire-modals::modals');
    }

    public function showModal($alias, ...$params)
    {
        $this->alias = $alias;
        $this->params = $params;

        $this->dispatch('showBootstrapModal');
    }

    public function resetModal()
    {
        $this->reset();
    }
}
