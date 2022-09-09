<?php

namespace App\Http\Livewire\Pages;

use App\Models\Resources;
use Livewire\Component;

class ResourcesComponent extends Component
{
    public function render()
    {
        $resources = Resources::where('status', '1')->get();
        return view('livewire.pages.resources-component', ['resources' => $resources])->layout('layouts.base');
    }
}
