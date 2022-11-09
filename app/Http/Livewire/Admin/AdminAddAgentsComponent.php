<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Agents;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddAgentsComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $slug;
    public $position;
    public $details;
    public $image;
    public $cover;
    public $facebook;
    public $twitter;
    public $linkedin;
    public $status;
    public $property_id;
    public $phone;
    public $mobile;
    public $email;
    public $website;

    public function generateslug()
    {
        $this->slug = Str::slug($this->title);
    }

    /* public function updated($fields)
    {
        $this->validateOnly($fields,[
            'title' => 'required',
            'slug' => 'required',
            'position' => 'required',
            'details' => 'required',
            //'image' => 'required|mimes:png,jpg,jpeg,webp',
            //'cover' => 'required|mimes:png,jpg,jpeg,webp',
            'facebook' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'status' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'website' => 'required',
        ]);
    }*/

    public function storeAget()
    {
        /* $this->validate([
            'title' => 'required',
            'slug' => 'required',
            'position' => 'required',
            'details' => 'required',
            //'image' => 'required|mimes:png,jpg,jpeg,webp',
           // 'cover' => 'required|mimes:png,jpg,jpeg,webp',
            'facebook' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'status' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'website' => 'required',
        ]);*/

        $agent = new Agents();
        $agent->title = $this->title;
        $agent->slug = $this->slug;
        $agent->position = $this->position;
        $agent->details = $this->details;
        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('agents/grid', $imageName);
        $agent->image = $imageName;
        $imgName = Carbon::now()->timestamp . '.' . $this->cover->extension();
        $this->cover->storeAs('page-title', $imageName);
        $agent->cover = $imgName;
        $agent->property_id = $this->property_id;
        $agent->facebook = $this->facebook;
        $agent->twitter = $this->twitter;
        $agent->linkedin = $this->linkedin;
        $agent->status = $this->status;
        $agent->phone = $this->phone;
        $agent->mobile = $this->mobile;
        $agent->email = $this->email;
        $agent->website = $this->website;
        $agent->save();
        session()->flash('message', 'Agent has been created successfully!');
        return redirect('/admin/add-agent');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-agents-component')->layout('layouts.backend');
    }
}
