<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddCategoryComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $image;
    public $cover;
    public $postedby;

    public function mount()
    {
        $this->postedby = Auth::user()->name;
    }
    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,webp',
        ]);
    }

    public function storeCategory()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,webp',
        ]);

        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('category', $imageName);
        $category->image = $imageName;
        $imgName = Carbon::now()->timestamp . '.' . $this->cover->extension();
        $this->image->storeAs('page-titles', $imageName);
        $category->cover = $imgName;
        $category->postedby = $this->postedby;
        $category->save();
        session()->flash('message', 'Category has been created successfully!');
        return redirect('/admin/add-category');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-category-component')->layout('layouts.backend');
    }
}
