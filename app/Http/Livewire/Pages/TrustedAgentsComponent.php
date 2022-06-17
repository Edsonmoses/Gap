<?php

namespace App\Http\Livewire\Pages;

use App\Models\Agents;
use Livewire\Component;
use App\Models\Pagetitle;

class TrustedAgentsComponent extends Component
{
    public function render()
    {
        $agents = Agents::all()->take(3);
        $pagetitle = Pagetitle::where('hide','=','Active')->get();
        return view('livewire.pages.trusted-agents-component',['agents'=>$agents,'pagetitle'=>$pagetitle]);
    }
}
