<?php

namespace App\Http\Livewire\Pages;

use App\Models\Property;
use Livewire\Component;

class PropertieSingleGalleryComponent extends Component
{
    public $slug;
     public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $property = Property::where('slug',$this->slug)->orderBy('name','ASC')->first();
         $related_property = Property::where('location_id',[$property->location_id])->inRandomOrder()->limit(5)->get();
        return view('livewire.pages.propertie-single-gallery-component',['property'=>$property,'related_property'=>$related_property])->layout('layouts.base');
    }
}
