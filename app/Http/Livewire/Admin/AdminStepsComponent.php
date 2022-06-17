<?php

namespace App\Http\Livewire\Admin;

use App\Models\Page;
use Livewire\Component;
use Livewire\WithPagination;

class AdminStepsComponent extends Component
{
     use WithPagination;
    public function render()
    {
        $pages = Page::where('category_id','=',2)->orderBy('name','ASC')->paginate(20);
        return view('livewire.admin.admin-steps-component',['pages'=>$pages])->layout('layouts.backend');
    }
}
