<?php

namespace App\Http\Livewire\Admin;

use App\Models\Page;
use Livewire\Component;
use Livewire\WithPagination;

class AdminPagesComponent extends Component
{
     use WithPagination;
    public function render()
    {
        $pages = Page::orderBy('name','ASC')->paginate(20);
        return view('livewire.admin.admin-pages-component',['pages'=>$pages])->layout('layouts.backend');
    }
}