<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class BlogSingleComponent extends Component
{
    public function render()
    {
        return view('livewire.pages.blog-single-component')->layout('layouts.base');
    }
}
