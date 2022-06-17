<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Pagetitle;

class AdminTitleComponent extends Component
{
       public function deactivate($id)
    {
        $pagetitle = Pagetitle::find($id);
        $pagetitle->hide = 'Inactive';
        $pagetitle->save();
        session()->flash('message','Page title has been Deactivated successfully!');
        return redirect('/admin/titles');
        
    }
    public function updateSetting($id)
    {
        $pagetitle = Pagetitle::find($id);
        $pagetitle->hide = 'Active';
        $pagetitle->save();
        session()->flash('message','Page title has been Actived successfully!');
         return redirect('/admin/titles');
        
    }
    public function render()
    {
        $pagetitle = Pagetitle::all();
        return view('livewire.admin.admin-title-component',['pagetitle'=>$pagetitle])->layout('layouts.backend');
    }
}
