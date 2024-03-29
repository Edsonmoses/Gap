<?php

namespace App\Http\Livewire\Pages;

use App\Models\Agents;
use Livewire\Component;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;

class AgentsProfileComponent extends Component
{
    public $slug;
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $agents = Agents::where('slug', $this->slug)->orderBy('created_at', 'desc')->latest()->first();
        $myproperties = Property::where('postedby', '=', Auth::user()->name)->orderBy('created_at', 'desc')->latest()->paginate(3);
        return view('livewire.pages.agents-profile-component', ['agents' => $agents, 'myproperties' => $myproperties])->layout('layouts.base');
    }
}
