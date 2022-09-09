<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Cars;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEditOurCarsComponet extends Component
{
    use WithFileUploads;
    public $name;
    public $slug, $desc, $price, $image, $newimage, $coverimg, $newcoverimg, $call, $whatsapp, $finance, $status;

    public function mount($slug)
    {
        $cars = Cars::where('slug', $slug)->first();
        $this->name = $cars->name;
        $this->slug = $cars->slug;
        $this->image = explode(",", $cars->image);
        $this->desc = $cars->desc;
        $this->price = $cars->price;
        $this->coverimg = $cars->coverimg;
        $this->call = $cars->call;
        $this->whatsapp = $cars->whatsapp;
        $this->finance = $cars->finance;
        $this->status = $cars->status;
        $this->cars_id = $cars->id;
    }
    public function generateSlug()
    {
        $placeObj = new Cars();

        $string = preg_replace('/[^A-Za-z0-9\-]/', '-', $this->name); //Removed all Special Character and replace with hyphen
        $final_slug = preg_replace('/-+/', '-', $string); //Removed double hyphen
        $carNameURL = strtolower($final_slug);
        $this->slug = Str::slug($carNameURL);
        //Check if this Slug already exists 
        $checkSlug = $placeObj->whereSlug($carNameURL)->exists();
        if ($checkSlug) {
            //Slug already exists.
            //Add numerical prefix at the end. Starting with 1
            $numericalPrefix = 1;
            while (1) {
                //Check if Slug with final prefix exists.
                $newSlug = $carNameURL . "-" . $numericalPrefix++; //new Slug with incremented Slug Numerical Prefix
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
            $this->slug = $carNameURL;
        }
    }

    public function storeCars()
    {

        $cars = Cars::find($this->cars_id);
        $cars->name = $this->name;
        $cars->slug  = $this->slug;
        $cars->desc = $this->desc;
        $cars->price = $this->price;
        $cars->status = $this->status;
        $cars->call = $this->call;
        $cars->whatsapp = $this->whatsapp;
        $cars->finance = $this->finance;
        if ($this->newimage) {
            if ($cars->image) {
                $images = explode(",", $cars->image);
                foreach ($images as $image) {
                    /* if($image)
                    {
                        unlink('passets/user/assets/images/roperties/slider'.'/'.$image); 
                    }*/
                }
            }

            $imagesname = '';
            foreach ($this->newimage as $key => $image) {
                $imgName = Carbon::now()->timestamp . $key . '.' . $image->extension();
                $image->storeAs('cars', $imgName);
                $imagesname = $imagesname . ',' . $imgName;
            }
            $cars->image =  $imagesname;
        }
        if ($this->newcoverimg) {
            if (file_exists('assets/user/images/cars' . '/' . $this->coverimg)) {
                if (!empty(file_exists('assets/user/images/cars' . '/' . $this->coverimg))) {
                    $downName = Carbon::now()->timestamp . '.' . $this->newcoverimg->extension();
                    $this->newcoverimg->storeAs('cars', $downName);
                    $this->coverimg = $downName;
                } else {
                    unlink('assets/user/images/cars' . '/' . $this->coverimg);
                    $downName = Carbon::now()->timestamp . '.' . $this->newcoverimg->extension();
                    $this->newcoverimg->storeAs('cars', $downName);
                    $this->coverimg = $downName;
                }
            } else {
                $downName = Carbon::now()->timestamp . '.' . $this->newcoverimg->extension();
                $this->newcoverimg->storeAs('cars', $downName);
                $this->coverimg = $downName;
            }
        }
        $cars->save();
        session()->flash('message', 'Property has been updated successfully!');
    }
    public function render()
    {
        $cars = Cars::all();
        return view('livewire.admin.admin-edit-our-cars-componet', ['cars' => $cars])->layout('layouts.backend');
    }
}
