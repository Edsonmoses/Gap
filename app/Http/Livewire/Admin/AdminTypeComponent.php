<?php

namespace App\Http\Livewire\Admin;

use App\Models\Type;
use Livewire\Component;
use Livewire\WithPagination;

class AdminTypeComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $types = Type::orderBy('created_at', 'desc')->latest()->paginate(6);
        return view('livewire.admin.admin-type-component', ['types' => $types])->layout('layouts.backend');
    }
}
