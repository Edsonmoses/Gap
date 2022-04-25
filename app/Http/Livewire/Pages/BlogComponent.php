<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class BlogComponent extends Component
{
    public function render()
    {
        return view('livewire.pages.blog-component')->layout('layouts.base');
    }
}
