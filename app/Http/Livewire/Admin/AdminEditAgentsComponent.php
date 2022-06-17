<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Agents;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEditAgentsComponent extends Component
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
    public $newimage;
    public $newcover;

    public function mount($slug)
    {
        $agent = Agents::where('slug',$slug)->first();
        $this->title = $agent->title;
        $this->slug = $agent->slug;
        $this->position = $agent->position;
        $this->details = $agent->details;
        $this->image = $agent->image;
        $this->cover = $agent->cover;
        $this->facebook = $agent->facebook;
        $this->twitter = $agent->twitter;
        $this->linkedin = $agent->linkedin;
        $this->status = $agent->status;
        $this->property_id = $agent->property_id;
        $this->phone = $agent->phone;
        $this->mobile = $agent->mobile;
        $this->email = $agent->email;
         $this->website = $agent->website;
         $this->agent_id = $agent->id;
    }

     public function generateslug()
    {
        $this->slug = Str::slug($this->title);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'title' => 'required',
            'slug' => 'required',
            'position' => 'required',
            'details' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'status' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'website' => 'required',
        ]);
    }

    public function storeAgent()
    {
        $this->validate([
            'title' => 'required',
            'slug' => 'required',
            'position' => 'required',
            'details' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'status' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'website' => 'required',
        ]);

        $agent = Agents::find($this->agent_id);
        $agent->title = $this->title;
        $agent->slug = $this->slug;
        $agent->position = $this->position;
        $agent->details = $this->details;
          if($this->newimage)
        {
            if($agent->image)
            {
               unlink('assets/user/assets/images/agents/grid'.'/'.$agent->image);
            }
            $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
            $this->newimage->storeAs('agents/grid',$imageName);
            $agent->image = $imageName;
        }
          if($this->newcover)
        {
            if($agent->cover)
            {
               unlink('assets/user/assets/images/page-titles'.'/'.$agent->cover);
            }
            $imgName = Carbon::now()->timestamp. '.' . $this->newcover->extension();
            $this->newcover->storeAs('page-titles',$imgName);
            $agent->cover = $imgName;
        }
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
        session()->flash('message','Agent has been updated successfully!');
         return redirect('/admin/agents');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-agents-component')->layout('layouts.backend');
    }
}
