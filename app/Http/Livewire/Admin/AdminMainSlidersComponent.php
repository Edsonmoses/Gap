<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminMainSlidersComponent extends Component
{
     public $name;
    public $slug;
    public $image;
    public $url;
    public $postedby;
    use WithFileUploads;

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
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,webp',
        ]);
    }

    public function storeSlider()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,webp',
        ]);

        $slider = new HomeSlider();
        $slider->name = $this->name;
        $slider->slug = $this->slug;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('category',$imageName);
        $slider->image = $imageName;
        $slider->url = $this->url;
        $slider->postedby = $this->postedby;
        $slider->save();
        session()->flash('message','Slider has been created successfully!');
        return redirect('/admin/add-slider');
    }
    public function render()
    {
        return view('livewire.admin.admin-main-sliders-component')->layout('layouts.backend');
    }
}
