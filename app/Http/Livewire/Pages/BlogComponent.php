<?php

namespace App\Http\Livewire\Pages;

use App\Models\Blog;
use Livewire\Component;

class BlogComponent extends Component
{
    public function render()
    {
        $posts = Blog::where('status', '=', 'approved')->orderBy('created_at', 'desc')->latest()->get();
        return view('livewire.pages.blog-component', ['posts' => $posts])->layout('layouts.base');
    }
}
