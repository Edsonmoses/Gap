<?php

namespace App\Http\Livewire\Admin;

use App\Models\Page;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddPagesComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $image;
    public $icon;
    public $description;
    public $category_id;
    public $postedby;

    public function mount()
    {
        $this->postedby = Auth::user()->name;
        $this->category_id = '1';
    }
      public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ]);
    }

    public function storePages()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ]);

        $page = new Page();
        $page->name = $this->name;
        $page->slug = $this->slug;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('pages',$imageName);
        $page->image = $imageName;
        $page->icon = $this->icon;
        $page->description = $this->description;
        $page->category_id = $this->category_id;
        $page->postedby = $this->postedby;
        $page->save();
        session()->flash('message','Page has been created successfully!');
        return redirect('/admin/add-page');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-pages-component')->layout('layouts.backend');
    }
}
