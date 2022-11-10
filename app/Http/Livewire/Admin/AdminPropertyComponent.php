<?php

namespace App\Http\Livewire\Admin;

use App\Models\Property;
use Livewire\Component;
use Livewire\WithPagination;

class AdminPropertyComponent extends Component
{
    use WithPagination;
    public function deleteProperty($id)
    {
        $property = Property::find($id);
        $property->delete();
        session()->flash('message', 'Property has been deleted successfully!');
    }
    public function activate($id)
    {
        $property = Property::find($id);
        $property->exclusive = 'exclusive';
        $property->save();
        session()->flash('message', 'Property title has been add to exclusive section successfully!');
    }
    public function deactivate($id)
    {
        $property = Property::find($id);
        $property->exclusive = 'inexclusive';
        $property->save();
        session()->flash('message', 'Property title has been remove from exclusive section successfully!');
    }

    public function render()
    {
        $properties = Property::orderBy('created_at', 'desc')->latest()->paginate(20);
        return view('livewire.admin.admin-property-component', ['properties' => $properties])->layout('layouts.backend');
    }
}
