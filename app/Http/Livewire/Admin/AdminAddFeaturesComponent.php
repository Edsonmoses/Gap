<?php

namespace App\Http\Livewire\Admin;

use App\Models\Features;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminAddFeaturesComponent extends Component
{
    public $name;
    public $slug;
    public $postedby;

    public function mount()
    {
        $this->postedby = Auth::user()->name;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required',
        ]);
    }

    public function storeAds()
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
    }

    public function render()
    {
        return view('livewire.admin.admin-add-features-component')->layout('layouts.base');
    }
}
