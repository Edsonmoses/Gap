<?php

namespace App\Http\Livewire\Pages;

use App\Models\Property;
use Livewire\Component;

class AirBnbDetailComponent extends Component
{
    public $slug;
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $airbnb = Property::where('slug', $this->slug)->orderBy('created_at', 'desc')->latest()->first();
        return view('livewire.pages.air-bnb-detail-component', ['airbnb' => $airbnb])->layout('layouts.base');
    }
}
