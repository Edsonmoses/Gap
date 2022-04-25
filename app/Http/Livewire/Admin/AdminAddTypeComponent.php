<?php

namespace App\Http\Livewire\Admin;

use App\Models\Type;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminAddTypeComponent extends Component
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

        $type = new Type();
        $type->name = $this->name;
        $type->slug = $this->slug;
        $type->postedby = $this->postedby;
        $type->save();
        session()->flash('message','Category has been created successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-type-component')->layout('layouts.base');
    }
}
