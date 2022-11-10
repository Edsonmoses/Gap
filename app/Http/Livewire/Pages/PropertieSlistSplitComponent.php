<?php

namespace App\Http\Livewire\Pages;

use App\Models\Property;
use Livewire\Component;

class PropertieSlistSplitComponent extends Component
{
    public function render()
    {
        $lproperties = Property::orderBy('created_at', 'desc')->latest()->paginate(20);
        return view('livewire.pages.propertie-slist-split-component', ['lproperties' => $lproperties])->layout('layouts.base');
    }
}
