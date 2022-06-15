<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserPropertiesComponent extends Component
{
    public function render()
    {
        return view('livewire.user.user-properties-component')->layout('layouts.backend');
    }
}
