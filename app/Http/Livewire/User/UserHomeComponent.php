<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserHomeComponent extends Component
{
    public function render()
    {
        return view('livewire.user.user-home-component')->layout('layouts.base');
    }
}
