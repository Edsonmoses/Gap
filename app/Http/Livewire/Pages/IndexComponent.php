<?php

namespace App\Http\Livewire\Pages;

use App\Models\Home;
use Livewire\Component;

class IndexComponent extends Component
{
    public function render()
    {
        $homes = Home::where('isActive','active')->get();
        return view('livewire.pages.index-component',['homes'=>$homes])->layout('layouts.base');
    }
}
