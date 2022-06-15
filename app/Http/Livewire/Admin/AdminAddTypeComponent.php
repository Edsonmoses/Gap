<?php

namespace App\Http\Livewire\Admin;

use App\Models\Type;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AdminAddTypeComponent extends Component
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

    public function storeType()
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
        session()->flash('message','Property type has been created successfully!');
        return redirect('/admin/add-type'); 
    }
    public function render()
    {
        return view('livewire.admin.admin-add-type-component')->layout('layouts.backend');
    }
}
