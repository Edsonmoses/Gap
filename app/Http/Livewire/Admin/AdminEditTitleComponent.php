<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Pagetitle;
use Illuminate\Support\Facades\Auth;

class AdminEditTitleComponent extends Component
{
     public $title;
     public $desc;
     public $podition;
     public $hide;

      public function mount($title)
    {
        $pagetitle = Pagetitle::where('title',$title)->first();
        $this->title = $pagetitle->title;
        $this->desc = $pagetitle->desc;
        $this->position = $pagetitle->position;
        $this->hide = $pagetitle->hide;
         $this->pagetitle_id = $pagetitle->id;
    }
     
      public function pageTitles()
    {
        $pagetitle = Pagetitle::find($this->agent_id);
        $pagetitle->title = $this->title;
        $pagetitle->desc = $this->desc;
        $pagetitle->podition = $this->podition;
        $pagetitle->hide = $this->hide;
        $pagetitle->save();
        session()->flash('message','Page title has been updated successfully!');
         return redirect('/admin/add-title');
        
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-title-component')->layout('layouts.backend');
    }
}
