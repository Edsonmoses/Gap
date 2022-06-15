<?php

namespace App\Http\Livewire\Admin;

use App\Models\Property;
use Livewire\Component;
use Livewire\WithPagination;

class AdminPropertyComponent extends Component
{
     use WithPagination;
     
    public function render()
    {
        $property = Property::orderBy('name','ASC')->paginate(20);
        return view('livewire.admin.admin-property-component',['property'=>$property])->layout('layouts.backend');
    }
}
