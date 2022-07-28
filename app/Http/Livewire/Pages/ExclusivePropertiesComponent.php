<?php

namespace App\Http\Livewire\Pages;

use App\Models\Property;
use Livewire\Component;

class ExclusivePropertiesComponent extends Component
{
    public function render()
    {
        $lproperties = Property::orderBy('name', 'ASC')->where('exclusive', '=', 'exclusive')->paginate(6);
        $sale = Property::where('status', 'sale')->where('exclusive', '=', 'exclusive')->count();
        $rent = Property::where('status', 'rent')->where('exclusive', '=', 'exclusive')->count();
        $Featured = Property::orderBy('name', 'ASC')->where('exclusive', '=', 'exclusive')->inRandomOrder()->paginate(6);
        return view('livewire.pages.exclusive-properties-component', ['lproperties' => $lproperties, 'sale' => $sale, 'rent' => $rent, 'Featured' => $Featured])->layout('layouts.base');
    }
}
