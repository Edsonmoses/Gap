<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserSocialProfileComponent extends Component
{
    public function render()
    {
        return view('livewire.user.user-social-profile-component')->layout('layouts.backend');
    }
}
