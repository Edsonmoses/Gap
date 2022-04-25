<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        return view('livewire.pages.about-component')->layout('layouts.base');
    }
}
