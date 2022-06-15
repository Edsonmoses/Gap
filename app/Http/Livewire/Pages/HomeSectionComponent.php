<?php

namespace App\Http\Livewire\Pages;

use App\Models\Location;
use App\Models\Property;
use Livewire\Component;

class HomeSectionComponent extends Component
{
    public function render()
    {
       $lproperties= Property::with('locations')->orderBy('name','ASC')->paginate(20)->take(4);
        $plocations= Location::all();
        $properties = Property::with('locations')->get();
        return view('livewire.pages.home-section-component',['lproperties'=>$lproperties, 'plocations'=>$plocations,'properties'=>$properties]);
    }
}
