<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminFeaturesComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-features-component')->layout('layouts.backend');
    }
}
