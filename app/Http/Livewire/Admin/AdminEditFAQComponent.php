<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Faqs;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEditFAQComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $desc;
    public $image;
    public $cover;
    public $newimage;
    public $newcover;

    public function mount($slug)
    {
        $faq = Faqs::where('slug', $slug)->first();
        $this->name = $faq->name;
        $this->slug = $faq->slug;
        $this->desc = $faq->desc;
        $this->image = $faq->image;
        $this->cover = $faq->cover;
        $this->faq_id = $faq->id;
    }

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

        $faq = Faqs::find($this->faq_id);
        $faq->name = $this->name;
        $faq->slug = $this->slug;
        $faq->desc = $this->desc;
        if ($this->newimage) {
            if ($faq->image) {
                unlink('assets/user/assets/images/accordion' . '/' . $faq->image);
            }
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('accordion', $imageName);
            $faq->image = $imageName;
        }
        if ($this->newcover) {
            if ($faq->cover) {
                unlink('assets/user/assets/images/page-titles' . '/' . $faq->cover);
            }
            $imgName = Carbon::now()->timestamp . '.' . $this->newcover->extension();
            $this->newcover->storeAs('page-titles', $imgName);
            $faq->cover = $imgName;
        }
        $faq->save();
        session()->flash('message', 'Faq has been updated successfully!');
        return redirect('/admin/add-faq');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-f-a-q-component')->layout('layouts.backend');
    }
}
