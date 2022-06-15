<?php

namespace App\Http\Livewire\Admin;

use App\Models\Features;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Field;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminAddFeaturesComponent extends Component
{
    public $name;
    public $slug;
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
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required',
        ]);
    }

    public function storeFeatures()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);
        $features = new Features();
        $features->name = $this->name;
        $features->slug = $this->slug;;
        $features->postedby = $this->postedby;
        $features->save();
        session()->flash('message','Features has been created successfully!');
         return redirect('/admin/add-features');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-features-component')->layout('layouts.backend');
    }
}
