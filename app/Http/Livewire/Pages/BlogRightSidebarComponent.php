<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class BlogRightSidebarComponent extends Component
{
    public function render()
    {
        return view('livewire.pages.blog-right-sidebar-component')->layout('layouts.base');
    }
}
