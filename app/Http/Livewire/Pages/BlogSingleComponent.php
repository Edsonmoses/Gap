<?php

namespace App\Http\Livewire\Pages;

use App\Models\Blog;
use Carbon\Carbon;
use Livewire\Component;

class BlogSingleComponent extends Component
{
    public $slug;
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $post = Blog::where('slug', $this->slug)->orderBy('name', 'ASC')->first();
        $r_posts = Blog::where('status', '=', 'approved')->orderBy('name', 'DESC')->get()->take(4);
        $archives = Blog::orderBy('created_at', 'DESC')->get()->groupBy(function ($item) {
            return $item->created_at->format('Y-m-d');
        });
        return view('livewire.pages.blog-single-component', ['post' => $post, 'r_posts' => $r_posts, 'archives' => $archives])->layout('layouts.base');
    }
}
