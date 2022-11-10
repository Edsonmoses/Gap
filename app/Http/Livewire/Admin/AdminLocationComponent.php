<?php

namespace App\Http\Livewire\Admin;

use App\Models\Location;
use Livewire\Component;

class AdminLocationComponent extends Component
{
    public function render()
    {
        $locations = Location::orderBy('created_at', 'desc')->latest()->paginate(6);
        return view('livewire.admin.admin-location-component', ['locations' => $locations])->layout('layouts.backend');
    }
}
