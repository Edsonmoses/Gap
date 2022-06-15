<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminSliderComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-slider-component')->layout('layouts.backend');
    }
}
