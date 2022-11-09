<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class AdminBlogComponent extends Component
{
    use WithPagination;
    public function deleteFaq($id)
    {
        $posts = Blog::find($id);
        $posts->delete();
        session()->flash('message', 'Post has been deleted successfully!');
        return redirect('/admin/titles');
    }
    public function render()
    {
        $posts = Blog::orderBy('name', 'ASC')->paginate(15);
        return view('livewire.admin.admin-blog-component', ['posts' => $posts])->layout('layouts.backend');
    }
}
