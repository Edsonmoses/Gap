<?php

namespace App\Http\Livewire\Pages;

use App\Models\Faqs;
use Livewire\Component;
use App\Models\Pagetitle;

class FAQComponent extends Component
{
    public function render()
    {
        $faqs = Faqs::all();
        $pagetitle = Pagetitle::where('hide', '=', 'Active')->get();
        return view('livewire.pages.f-a-q-component', ['pagetitle' => $pagetitle, 'faqs' => $faqs])->layout('layouts.base');
    }
}
