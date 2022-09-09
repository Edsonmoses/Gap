<?php

namespace App\Http\Livewire\Pages;

use App\Models\Partners;
use Livewire\Component;

class PartnersComponent extends Component
{
    public function render()
    {
        $partners = Partners::where('status', '1')->get();
        return view('livewire.pages.partners-component', ['partners' => $partners])->layout('layouts.base');
    }
}
