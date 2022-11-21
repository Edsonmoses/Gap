<?php

namespace App\Http\Livewire\Pages;

use App\Models\Home;
use App\Models\Partners;
use Livewire\Component;

class FooterComponent extends Component
{
    public function render()
    {
        $homes = Home::where('isActive', 'active')->get();
        $logos = Partners::where('status', 1)->get();
        return view('livewire.pages.footer-component', ['homes' => $homes, 'logos' => $logos]);
    }
}
