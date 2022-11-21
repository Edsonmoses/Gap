<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class AdminEditCategoryComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $image;
    public $cover;
    public $postedby;
    public $newimage;
    public $newcover;

    public function mount($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->image = $category->image;
        $this->cover = $category->cover;
        $this->category_id = $category->id;
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
        ]);
    }

    public function storeCategory()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $category = Category::find($this->category_id);
        $category->name = $this->name;
        $category->slug = $this->slug;
        if ($this->newimage) {
            if (file_exists('assets/user/assets/images/category' . '/' . $this->image)) {
                if (!empty(file_exists('assets/user/assets/images/category' . '/' . $this->image))) {
                    $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
                    $this->newimage->storeAs('category', $imageName);
                    $category->image = $imageName;
                } else {
                    unlink('assets/user/assets/images/category' . '/' . $this->image);
                    $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
                    $this->newimage->storeAs('category', $imageName);
                    $category->image = $imageName;
                }
            } else {
                $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
                $this->newimage->storeAs('category', $imageName);
                $category->image = $imageName;
            }
        }

        if ($this->newcover) {
            if (file_exists('assets/user/assets/images/category' . '/' . $this->cover)) {
                if (!empty(file_exists('assets/user/assets/images/category' . '/' . $this->cover))) {
                    $imgName = Carbon::now()->timestamp . '.' . $this->newcover->extension();
                    $this->newcover->storeAs('page-titles', $imageName);
                    $category->cover = $imgName;
                } else {
                    unlink('assets/user/assets/images/category' . '/' . $this->cover);
                    $imgName = Carbon::now()->timestamp . '.' . $this->newcover->extension();
                    $this->newcover->storeAs('page-titles', $imageName);
                    $category->cover = $imgName;
                }
            } else {
                $imgName = Carbon::now()->timestamp . '.' . $this->newcover->extension();
                $this->newcover->storeAs('page-titles', $imageName);
                $category->cover = $imgName;
            }
        }

        $category->postedby = $this->postedby;
        $category->save();
        session()->flash('message', 'Category has been updated successfully!');
        return redirect('/admin/add-category');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-category-component')->layout('layouts.backend');
    }
}
