<?php

namespace App\Http\Livewire\Pages;

use App\Models\Home;
use Livewire\Component;

class FooterComponent extends Component
{
    public function render()
    {
        $homes = Home::where('isActive','active')->get();
        return view('livewire.pages.footer-component',['homes'=>$homes]);
    }
}
