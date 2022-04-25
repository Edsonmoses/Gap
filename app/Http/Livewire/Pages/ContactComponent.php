<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class ContactComponent extends Component
{
    public function render()
    {
        return view('livewire.pages.contact-component')->layout('layouts.base');
    }
}
