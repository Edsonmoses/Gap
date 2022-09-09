<?php

namespace App\Http\Livewire\Pages;

use App\Models\Cars;
use Livewire\Component;

class OurCarsDetailComponent extends Component
{
    public $slug;
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $cars = Cars::where('slug', $this->slug)->orderBy('name', 'ASC')->first();
        return view('livewire.pages.our-cars-detail-component', ['cars' => $cars])->layout('layouts.base');
    }
}
