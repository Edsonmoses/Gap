<?php

namespace App\Http\Livewire\Pages;

use App\Models\Property;
use Livewire\Component;

class PropertiesGridComponent extends Component
{
    public function render()
    {
        $lproperties= Property::orderBy('name','ASC')->paginate(6);
        $sale = Property::where('status','sale')->count();
        $rent = Property::where('status','rent')->count();
        return view('livewire.pages.properties-grid-component',['lproperties'=>$lproperties,'sale'=>$sale,'rent'=>$rent])->layout('layouts.base');
    }
}
