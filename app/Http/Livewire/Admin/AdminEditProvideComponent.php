<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Page;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class AdminEditProvideComponent extends Component
{ 
    use WithFileUploads;
    public $name;
    public $slug;
    public $image;
    public $icon;
    public $description;
    public $category_id;
    public $postedby;
    public $newimage;
    public $newicon;

    public function mount($slug)
    {
        $pages = Page::where('slug',$slug)->first();
        $this->name = $pages->name;
        $this->slug = $pages->slug;
        $this->image = $pages->image;
        $this->icon = $pages->icon;
        $this->description = $pages->description;
         $this->page_id = $pages->id;
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

        $page = Page::find($this->page_id);
        $page->name = $this->name;
        $page->slug = $this->slug;
        if($this->newicon)
        {
            if($page->icon)
            {
               unlink('assets/user/assets/images/features/icons'.'/'.$page->icon);
            }
            $imageName = Carbon::now()->timestamp. '.' . $this->newicon->extension();
            $this->newicon->storeAs('features/icons',$imageName);
            $page->icon = $imageName;
        }
        $page->image = $this->image;
        $page->description = $this->description;
        $page->category_id = $this->category_id;
        $page->postedby = $this->postedby;
        $page->save();
        session()->flash('message','Provide has been updated successfully!');
        return redirect('/admin/provide');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-provide-component')->layout('layouts.backend');
    }
}
