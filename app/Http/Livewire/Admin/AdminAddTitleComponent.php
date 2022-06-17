<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Pagetitle;

class AdminAddTitleComponent extends Component
{
     public $title;
     public $desc;
     public $podition;
     public $hide;

     public function mount()
    {
        $this->podition = 'pages';
    }
     
      public function pageTitles()
    {
        $pagetitle = new Pagetitle();
        $pagetitle->title = $this->title;
        $pagetitle->desc = $this->desc;
        $pagetitle->podition = $this->podition;
        $pagetitle->hide = $this->hide;
        $pagetitle->save();
        session()->flash('message','Page title has been created successfully!');
         return redirect('/admin/add-title');
        
    }
    public function render()
    {
        return view('livewire.admin.admin-add-title-component')->layout('layouts.backend');
    }
}
