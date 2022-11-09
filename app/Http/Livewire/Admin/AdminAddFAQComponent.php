<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Faqs;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddFAQComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $desc;
    public $image;
    public $cover;

    public function generateslug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    /* public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required',
            'desc' => 'required',
            //'image' => 'required|mimes:png,jpg,jpeg,webp',
            //'cover' => 'required|mimes:png,jpg,jpeg,webp',
        ]);
    }*/

    public function storeFaqs()
    {
        /* $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'desc' => 'required',
            //'image' => 'required|mimes:png,jpg,jpeg,webp',
           // 'cover' => 'required|mimes:png,jpg,jpeg,webp',
        ]);*/

        $faq = new Faqs();
        $faq->name = $this->name;
        $faq->slug = $this->slug;
        $faq->desc = $this->desc;
        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('accordion', $imageName);
        $faq->image = $imageName;
        $imgName = Carbon::now()->timestamp . '.' . $this->cover->extension();
        $this->cover->storeAs('page-title', $imageName);
        $faq->cover = $imgName;
        $faq->save();
        session()->flash('message', 'Faq has been created successfully!');
        return redirect('/admin/add-faq');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-f-a-q-component')->layout('layouts.backend');
    }
}
