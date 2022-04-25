<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Page404Component extends Component
{
    public function render()
    {
        return view('livewire.pages.page404-component')->layout('layouts.base');
    }
}
