<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Partners;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEditPartnersComponet extends Component
{
    public $name, $slug, $desc, $image, $newimage, $coverimg, $newcoverimg;
    use WithFileUploads;

    public function mount($slug)
    {
        $partners = Partners::where('slug', $slug)->first();
        $this->partner_id = $partners->id;
        $this->name  = $partners->name;
        $this->slug = $partners->slug;
        $this->image  = $partners->image;
        $this->desc = $partners->desc;
        $this->status = $partners->status;
        $this->coverimg = $partners->coverimg;
    }

    public function generateSlug()
    {
        $placeObj = new Partners();

        $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $this->name); //Removed all Special Character and replace with hyphen
        $final_slug = preg_replace('/-+/', '-', $string); //Removed double hyphen
        $partnerNameURL = strtolower($final_slug);
        $this->slug = Str::slug($partnerNameURL);
        //Check if this Slug already exists 
        $checkSlug = $placeObj->whereSlug($partnerNameURL)->exists();
        if ($checkSlug) {
            //Slug already exists.
            //Add numerical prefix at the end. Starting with 1
            $numericalPrefix = 1;
            while (1) {
                //Check if Slug with final prefix exists.
                $newSlug = $partnerNameURL . "-" . $numericalPrefix++; //new Slug with incremented Slug Numerical Prefix
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
            $this->slug = $partnerNameURL;
        }
    }

    public function storePartners()
    {

        $partners = Partners::find($this->partner_id);
        $partners->name = $this->name;
        $partners->slug  = $this->slug;
        $partners->desc = $this->desc;
        if ($this->newimage) {
            if (file_exists('assets/user/images/partners' . '/' . $this->image)) {
                if (!empty(file_exists('assets/user/images/partners' . '/' . $this->image))) {
                    $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
                    $this->newimage->storeAs('partners', $imageName);
                    $this->image = $imageName;
                } else {
                    unlink('assets/user/images' . '/' . $this->image);
                    $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
                    $this->newimage->storeAs('partners', $imageName);
                    $this->image = $imageName;
                }
            } else {
                $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
                $this->newimage->storeAs('partners', $imageName);
                $this->image = $imageName;
            }
        }
        if ($this->newcoverimg) {
            if (file_exists('assets/user/images/partners' . '/' . $this->coverimg)) {
                if (!empty(file_exists('assets/user/images/partners' . '/' . $this->coverimg))) {
                    $downName = Carbon::now()->timestamp . '.' . $this->newcoverimg->extension();
                    $this->newcoverimg->storeAs('partners', $downName);
                    $this->coverimg = $downName;
                } else {
                    unlink('assets/user/images/partners' . '/' . $this->coverimg);
                    $downName = Carbon::now()->timestamp . '.' . $this->newcoverimg->extension();
                    $this->newcoverimg->storeAs('partners', $downName);
                    $this->coverimg = $downName;
                }
            } else {
                $downName = Carbon::now()->timestamp . '.' . $this->newcoverimg->extension();
                $this->newcoverimg->storeAs('partners', $downName);
                $this->coverimg = $downName;
            }
        }
        $partners->save();
        session()->flash('message', 'Property has been updated successfully!');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Partners::find($id)->delete();
        session()->flash('message', 'Partner Deleted Successfully.');
    }
    public function render()
    {
        $partners = Partners::all();
        return view('livewire.admin.admin-edit-partners-componet', ['partners' => $partners])->layout('layouts.backend');
    }
}
