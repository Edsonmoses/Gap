<?php

namespace App\Http\Livewire\Pages;

use App\Models\Cars;
use Livewire\Component;

class OurCarsComponent extends Component
{
    public $coverimg;
    public $name;

    public function render()
    {
        $cars = Cars::where('status', '1')->get();
        return view('livewire.pages.our-cars-component', ['cars' => $cars])->layout('layouts.base');
    }
}
