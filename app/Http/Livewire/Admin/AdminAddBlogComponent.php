<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddBlogComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $status;
    public $bio;
    public $image;
    public $cover;
    public $postedby;
    public $category_id;

    public function mount()
    {
        $this->postedby = Auth::user()->name;
        $this->status = 'pending';
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    /* public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required',
            'status' => 'required',
            'bio' => 'required',
            //'image' => 'required|mimes:png,jpg,jpeg,webp',
            //'cover' => 'required|mimes:png,jpg,jpeg,webp',
             'postedby' => 'required',
             'category_id' => 'required',
        ]);
    }*/

    public function storePost()
    {
        /* $this->validate([
             'name' => 'required',
            'slug' => 'required',
            'status' => 'required',
            'bio' => 'required',
            //'image' => 'required|mimes:png,jpg,jpeg,webp',
            //'cover' => 'required|mimes:png,jpg,jpeg,webp',
             'postedby' => 'required',
             'category_id' => 'required',
        ]);*/

        $post = new Blog();
        $post->name = $this->name;
        $post->slug = $this->slug;
        $post->status = $this->status;
        $post->bio = $this->bio;
        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('blog/grid', $imageName);
        $post->image = $imageName;
        $imgName = Carbon::now()->timestamp . '.' . $this->cover->extension();
        $this->cover->storeAs('page-title', $imageName);
        $post->cover = $imgName;
        $post->postedby = $this->postedby;
        $post->category_id = $this->category_id;
        $post->save();
        session()->flash('message', 'Post has been created successfully!');
        return redirect('/admin/add-post');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-blog-component')->layout('layouts.backend');
    }
}
