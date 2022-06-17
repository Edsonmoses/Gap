<?php

namespace App\Http\Livewire\Pages;

use App\Models\Page;
use App\Models\Agents;
use Livewire\Component;
use App\Models\Location;
use App\Models\Pagetitle;
use App\Models\Property;

class HomeSectionComponent extends Component
{
    public function render()
    {
        $lproperties= Property::with('locations')->orderBy('name','ASC')->take(4)->get();
        $plocations= Location::all();
        $properties = Property::with('locations')->get();
        $pages = Page::where('category_id','=',2)->orderBy('name','ASC')->take(3)->get();
        $pagetitle = Pagetitle::where('hide','=','Active')->get();
        return view('livewire.pages.home-section-component',['lproperties'=>$lproperties, 'plocations'=>$plocations,'properties'=>$properties,'pages'=>$pages,'pagetitle'=>$pagetitle]);
    }
}
