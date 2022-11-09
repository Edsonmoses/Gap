<?php

namespace App\Http\Livewire\Admin;

use App\Models\Faqs;
use Livewire\Component;

class AdminFAQComponent extends Component
{
    public function deleteFaq($id)
    {
        $faqs = Faqs::find($id);
        $faqs->delete();
        session()->flash('message', 'Faq has been deleted successfully!');
        return redirect('/admin/titles');
    }
    public function render()
    {
        $faqs = Faqs::all();
        return view('livewire.admin.admin-f-a-q-component', ['faqs' => $faqs])->layout('layouts.backend');
    }
}
