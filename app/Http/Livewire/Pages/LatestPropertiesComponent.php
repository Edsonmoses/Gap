<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Features;
use App\Models\Location;
use App\Models\Property;
use App\Models\Pagetitle;

class LatestPropertiesComponent extends Component
{
    public $slug;
    public function render()
    {
        $lproperties = Property::orderBy('created_at', 'desc')->latest()->paginate(20);
        $plocations = Location::all();
        $pagetitle = Pagetitle::where('hide', '=', 'Active')->get();
        return view('livewire.pages.latest-properties-component', ['lproperties' => $lproperties, 'plocations' => $plocations, 'pagetitle' => $pagetitle]);
    }
}
