<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Property;
use Illuminate\Http\Request;

class HomeSearchComponent extends Component
{
    public function filter()
    {
        $property = Property::query();

        $locations = $this->locations;
        $type_id = $this->type_id;
        $status = $this->status;
        $area = $this->area;
        $SRprice = $this->SRprice;

        if ($locations) {
            $property->where('locations', 'LIKE', '%' . $locations . '%');
        }
        if ($type_id) {
            $property->where('type_id', 'LIKE', '%' . $type_id . '%');
        }

        if ($status) {
            $property->where('status', 'LIKE', '%' . $status . '%');
        }

        if ($SRprice) {
            $property->where('SRprice', 'LIKE', '%' . $SRprice . '%');
        }
        if ($area) {
            $property->where('area', 'LIKE', '%' . $area . '%');
        }

        $data = [
            'area' => $area,
            'status' => $status,
            'type_id' => $type_id,
            'locations' => $locations,
            'locations' => $locations,
            'property' => $property->latest()->simplePaginate(20),
        ];

        return view('livewire.pages.home-search-component', $data);
    }

    public function render()
    {
        $property = Property::all();
        return view('livewire.pages.home-search-component', ['property' => $property]);
    }
}
