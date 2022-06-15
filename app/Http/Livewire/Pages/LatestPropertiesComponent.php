<?php

namespace App\Http\Livewire\Pages;

use App\Models\Features;
use App\Models\Location;
use App\Models\Property;
use Livewire\Component;

class LatestPropertiesComponent extends Component
{
     public $slug;
    public function render()
    {
        $lproperties= Property::orderBy('name','ASC')->paginate(20);
        $plocations= Location::all();
        return view('livewire.pages.latest-properties-component',['lproperties'=>$lproperties,'plocations'=>$plocations]);
    }
}
