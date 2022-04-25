<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class BlogLeftSidebarComponent extends Component
{
    public function render()
    {
        return view('livewire.pages.blog-left-sidebar-component')->layout('layouts.base');
    }
}
