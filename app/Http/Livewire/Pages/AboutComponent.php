<?php

namespace App\Http\Livewire\Pages;

use App\Models\Page;
use Livewire\Component;
use App\Models\Pagetitle;

class AboutComponent extends Component
{
    public function render()
    {
         $pages = Page::where('category_id','=',1)->orderBy('name','ASC')->get();
         $page = Page::where('category_id','=',3)->orderBy('id','ASC')->take(4)->get();
         $pagetitle = Pagetitle::where('hide','=','Active')->get();
        return view('livewire.pages.about-component',['pages'=>$pages,'page'=>$page,'pagetitle'=>$pagetitle])->layout('layouts.base');
    }
}
