<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Blog;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class AdminEditBlogComponent extends Component
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
    public $newimage;
    public $newcover;

    public function mount($slug)
    {
        $post = Blog::where('slug', $slug)->first();
        $this->name = $post->name;
        $this->slug = $post->slug;
        $this->status = $post->status;
        $this->bio = $post->bio;
        $this->image = $post->image;
        $this->cover = $post->cover;
        $this->postedby = $post->postedby;
        $this->category_id = $post->category_id;
        $this->post_id = $post->id;
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

        $post = Blog::find($this->post_id);
        $post->name = $this->name;
        $post->slug = $this->slug;
        $post->status = $this->status;
        $post->bio = $this->bio;
        if ($this->newimage) {
            if ($post->image) {
                unlink('assets/user/assets/images/blog/grid' . '/' . $post->image);
            }
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('posts/grid', $imageName);
            $post->image = $imageName;
        }
        if ($this->newcover) {
            if ($post->cover) {
                unlink('assets/user/assets/images/page-titles' . '/' . $post->cover);
            }
            $imgName = Carbon::now()->timestamp . '.' . $this->newcover->extension();
            $this->newcover->storeAs('page-titles', $imgName);
            $post->cover = $imgName;
        }
        $post->postedby = $this->postedby;
        $post->category_id = $this->category_id;
        $post->save();
        session()->flash('message', 'Post has been created successfully!');
        return redirect('/admin/add-post');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-blog-component')->layout('layouts.backend');
    }
}
