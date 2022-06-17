<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Page;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class AdminAddProvideComponent extends Component
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
        $this->category_id = '3';
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
            'description' => 'required',
            'category_id' => 'required',
        ]);
    }

    public function storeProvide()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ]);

        $page = new Page();
        $page->name = $this->name;
        $page->slug = $this->slug;
        $imageName = Carbon::now()->timestamp. '.' . $this->icon->extension();
        $this->icon->storeAs('features/icons',$imageName);
        $page->icon = $imageName;
        $page->image = $this->image;
        $page->description = $this->description;
        $page->category_id = $this->category_id;
        $page->postedby = $this->postedby;
        $page->save();
        session()->flash('message','Provide has been created successfully!');
        return redirect('/admin/add-provide');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-provide-component')->layout('layouts.backend');
    }
}
