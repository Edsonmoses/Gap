<?php

namespace App\Http\Livewire\Pages;

use App\Models\Home;
use App\Models\Agents;
use Livewire\Component;
use App\Models\Property;

class IndexComponent extends Component
{
    public $locations;
    public $type_id;
    public $status;
    public $area;
    public $SRprice;

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
        $homes = Home::where('isActive', 'active')->get();
        $lproperties = Property::with('locations')->orderBy('name', 'ASC');
        return view('livewire.pages.index-component', ['homes' => $homes, 'lproperties' => $lproperties])->layout('layouts.base');
    }
}
