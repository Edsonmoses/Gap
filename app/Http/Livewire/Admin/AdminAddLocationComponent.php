<?php

namespace App\Http\Livewire\Admin;

use App\Models\Location;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminAddLocationComponent extends Component
{
    public $address;
    public $country;
    public $city;
    public $state;
    public $zipcode;
    public $neighborhood;
    public $postedby;

    public function mount()
    {
        $this->postedby = Auth::user()->name;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'address' => 'required',
            'country' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'neighborhood' => 'required',
        ]);
    }

    public function storeAds()
    {
        $this->validate([
            'address' => 'required',
            'country' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'neighborhood' => 'required',
        ]);

        $location = new Location();
        $location->address = $this->address;
        $location->country = $this->country;
        $location->city = $this->city;
        $location->state = $this->state;
        $location->zipcode = $this->zipcode;
        $location->neighborhood = $this->neighborhood;
        $location->postedby = $this->postedby;
        $location->save();
        session()->flash('message','Location has been created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-location-component')->layout('layouts.base');
    }
}
