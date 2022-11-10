<?php

namespace App\Http\Livewire\Pages;

use App\Models\Property;
use Livewire\Component;

class PropertiesGridComponent extends Component
{
    public function render()
    {
        $lproperties = Property::orderBy('created_at', 'desc')->latest()->where('exclusive', '=', 'inexclusive')->paginate(6);
        $sale = Property::where('status', 'sale')->where('exclusive', '=', 'inexclusive')->count();
        $rent = Property::where('status', 'rent')->where('exclusive', '=', 'inexclusive')->count();
        $Featured = Property::orderBy('name', 'ASC')->where('exclusive', '=', 'inexclusive')->inRandomOrder()->paginate(6);
        return view('livewire.pages.properties-grid-component', ['lproperties' => $lproperties, 'sale' => $sale, 'rent' => $rent, 'Featured' => $Featured])->layout('layouts.base');
    }
}
