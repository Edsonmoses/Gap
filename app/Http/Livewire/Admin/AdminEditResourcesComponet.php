<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Resources;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class AdminEditResourcesComponet extends Component
{
    use WithFileUploads;
    public $resources, $name, $slug, $pdf, $newpdf, $coverimg, $newcoverimg, $status, $resources_id;

    public function mount($slug)
    {
        $resources = Resources::where('slug', $slug)->first();
        $this->name = $resources->name;
        $this->slug = $resources->slug;
        $this->coverimg = $resources->coverimg;
        $this->pdf = $resources->pdf;
        $this->status = $resources->status;
        $this->resources_id = $resources->id;
        $this->postedby = Auth::user()->name;
    }

    public function generateSlug()
    {
        $placeObj = new Resources();

        $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $this->name); //Removed all Special Character and replace with hyphen
        $final_slug = preg_replace('/-+/', '-', $string); //Removed double hyphen
        $resourceNameURL = strtolower($final_slug);
        $this->slug = Str::slug($resourceNameURL);
        //Check if this Slug already exists 
        $checkSlug = $placeObj->whereSlug($resourceNameURL)->exists();
        if ($checkSlug) {
            //Slug already exists.
            //Add numerical prefix at the end. Starting with 1
            $numericalPrefix = 1;
            while (1) {
                //Check if Slug with final prefix exists.
                $newSlug = $resourceNameURL . "-" . $numericalPrefix++; //new Slug with incremented Slug Numerical Prefix
                $newSlug = Str::slug($newSlug); //String Slug
                $checkSlug = $placeObj->whereSlug($newSlug)->exists(); //Check if already exists in DB
                //This returns true if exists.
                if (!$checkSlug) {
                    //There is not more coincidence. Finally found unique slug.
                    $this->slug = $newSlug; //New Slug 
                    break; //Break Loop
                }
            }
        } else {
            //Slug do not exists. Just use the selected Slug.
            $this->slug = $resourceNameURL;
        }
    }
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'slug' => 'required',
            'pdf' => 'image|max:6,716,734',
            'coverimg' => 'image|max:6,716,734',
        ]);
    }

    public function storeResources()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'pdf' => 'image|max:6,716,734',
            'coverimg' => 'image|max:6,716,734',
        ]);

        $resources = Resources::find($this->resources_id);
        $resources->name = $this->name;
        $resources->slug = $this->slug;
        if ($this->pdf) {
            if (file_exists('assets/user/images/resources' . '/' . $this->pdf)) {
                if (!empty(file_exists('assets/user/images/resources' . '/' . $this->pdf))) {
                    $imageName = Carbon::now()->timestamp . '.' . $this->newpdf->extension();
                    $resources->pdf = $imageName;
                } else {
                    unlink('assets/user/images/resources' . '/' . $this->pdf);
                    $imageName = Carbon::now()->timestamp . '.' . $this->newpdf->extension();
                    $this->pdf->storeAs('resources', $imageName);
                    $resources->pdf = $imageName;
                }
            } else {
                $imageName = Carbon::now()->timestamp . '.' . $this->newpdf->extension();
                $this->newpdf->storeAs('resources', $imageName);
                $resources->pdf = $imageName;
            }
        }
        if ($this->newcoverimg) {
            if (file_exists('assets/user/images/resources' . '/' . $this->coverimg)) {
                if (!empty(file_exists('assets/user/images/resources' . '/' . $this->coverimg))) {
                    $downName = Carbon::now()->timestamp . '.' . $this->newcoverimg->extension();
                    $this->newcoverimg->storeAs('resources', $downName);
                    $resources->coverimg = $downName;
                } else {
                    unlink('assets/user/images/resources' . '/' . $this->coverimg);
                    $downName = Carbon::now()->timestamp . '.' . $this->newcoverimg->extension();
                    $this->cnewoverimg->storeAs('resources', $downName);
                    $resources->coverimg = $downName;
                }
            } else {
                $downName = Carbon::now()->timestamp . '.' . $this->newcoverimg->extension();
                $this->newcoverimg->storeAs('resources', $downName);
                $resources->coverimg = $downName;
            }
            $resources->status = $this->status;
            $resources->save();
            session()->flash('message', 'Resource has been updated successfully!');
            return redirect('/admin/resources');
        }
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-resources-componet')->layout('layouts.backend');
    }
}
