<?php

namespace App\Http\Livewire\Pages;

use App\Models\Property;
use Livewire\Component;

class AirbnComponent extends Component
{
    public function render()
    {
        $airbnb = Property::where('category_id', '=', '4')->get();
        return view('livewire.pages.airbn-component', ['airbnb' => $airbnb])->layout('layouts.base');
    }
}
