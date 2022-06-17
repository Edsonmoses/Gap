<?php

namespace App\Http\Livewire\Admin;

use App\Models\Page;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProvideComponent extends Component
{
     use WithPagination;
    public function render()
    {
        $pages = Page::where('category_id','=',3)->orderBy('name','ASC')->paginate(20);
        return view('livewire.admin.admin-provide-component',['pages'=>$pages])->layout('layouts.backend');
    }
}
