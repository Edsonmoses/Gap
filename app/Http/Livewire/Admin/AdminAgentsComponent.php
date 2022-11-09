<?php

namespace App\Http\Livewire\Admin;

use App\Models\Agents;
use Livewire\Component;
use Livewire\WithPagination;

class AdminAgentsComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $agents = Agents::orderBy('title', 'ASC')->paginate(15);
        return view('livewire.admin.admin-agents-component', ['agents' => $agents])->layout('layouts.backend');
    }
}
