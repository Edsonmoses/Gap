<?php

namespace App\Http\Livewire\Admin;

use App\Models\Cars;
use Livewire\Component;
use App\Models\Property;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        $properties = Property::orderBy('created_at', 'desc')->latest()->paginate(6);
        $bnb = Property::where('category_id', 4)->orderBy('created_at', 'desc')->latest()->paginate(6);
        $cars = Cars::where('status', 1)->orderBy('created_at', 'desc')->latest()->paginate(6);
        return view('livewire.admin.admin-dashboard-component', ['properties' => $properties, 'bnb' => $bnb, 'cars' => $cars])->layout('layouts.backend');
    }
}
