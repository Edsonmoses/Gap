<?php

namespace App\Http\Livewire\Pages;

use App\Models\Home;
use App\Models\Agents;
use Livewire\Component;
use App\Models\Property;

class IndexComponent extends Component
{
    public function render()
    {
        $homes = Home::where('isActive','active')->get();
        $lproperties= Property::with('locations')->orderBy('name','ASC');
        return view('livewire.pages.index-component',['homes'=>$homes,'lproperties'=>$lproperties])->layout('layouts.base');
    }
}
