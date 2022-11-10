<?php

namespace App\Http\Livewire\Pages;

use App\Models\Agents;
use Livewire\Component;
use App\Models\Property;

class PropertieSingleGalleryComponent extends Component
{
    public $slug;
    public $property_id;
    public function mount($slug)
    {
        $property = Property::where('slug', $slug)->first();
        $this->slug = $slug;
        $this->agent_id = $property->agent_id;
    }
    public function render()
    {
        $property = Property::where('slug', $this->slug)->orderBy('created_at', 'desc')->first();
        $related_property = Property::orderBy('name', 'ASC')->where('exclusive', '=', 'inexclusive')->inRandomOrder()->limit(5)->get();
        $Featured = Property::orderBy('name', 'ASC')->where('exclusive', '=', 'inexclusive')->inRandomOrder()->paginate(3);
        $s_agents = Agents::orderBy('title', 'ASC')->where('id', $this->agent_id)->where('status', 1)->get();
        return view('livewire.pages.propertie-single-gallery-component', ['property' => $property, 'related_property' => $related_property, 'Featured' => $Featured, 's_agents' => $s_agents])->layout('layouts.base');
    }
}
