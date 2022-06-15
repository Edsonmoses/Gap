<?php

namespace App\Http\Livewire\Admin;

use App\Models\Home;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class AdminHomeComponent extends Component
{
    public $name;
    public $isActive;

    public function mount()
    {
        $this->isActive = 'active';
    }
    public function deactivate($id)
    {
        $homes = Home::find($id);
        $homes->isActive = 'inactive';
        $homes->save();
        session()->flash('message','Home header has been Deactivated successfully!');
        return redirect('/admin/home');
        
    }
    public function updateSetting($id)
    {
        $homes = Home::find($id);
        $homes->isActive = $this->isActive;
        $homes->save();
        session()->flash('message','Home header has been Actived successfully!');
         return redirect('/admin/home');
        
    }
    public function render()
    {
        $homes = Home::all();
        return view('livewire.admin.admin-home-component',['homes'=>$homes])->layout('layouts.backend');
    }
}
