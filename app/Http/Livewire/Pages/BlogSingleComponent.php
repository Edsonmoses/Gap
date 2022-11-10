<?php

namespace App\Http\Livewire\Pages;

use App\Models\Blog;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class BlogSingleComponent extends Component
{
    use WithPagination;
    public $slug;
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $post = Blog::where('slug', $this->slug)->orderBy('created_at', 'desc')->latest()->first();
        $posts = Blog::where('slug', $this->slug)->orderBy('created_at', 'desc')->latest()->paginate(3);
        $r_posts = Blog::where('status', '=', 'approved')->orderBy('created_at', 'desc')->latest()->get()->take(4);
        $archives = Blog::orderBy('created_at', 'desc')->latest()->get()->groupBy(function ($item) {
            return $item->created_at->format('Y-m-d');
        });
        return view('livewire.pages.blog-single-component', ['post' => $post, 'posts' => $posts, 'r_posts' => $r_posts, 'archives' => $archives])->layout('layouts.base');
    }
}
