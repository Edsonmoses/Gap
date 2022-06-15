<?php

namespace App\Http\Livewire\User;

use App\Models\Location;
use App\Models\Property;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserAddPropertiesComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $description;
    public $type_id;
    public $status;
    public $location_id;
    public $bedrooms;
    public $bathrooms;
    public $floors;
    public $garages;
    public $area;
    public $size;
    public $SRprice;
    public $Bprice;
    public $Aprice;
    public $propertyID;
    public $videoURL;
    public $features_id;
    public $gallery;
    public $address;
    public $country;
    public $city;
    public $state;
    public $zipcode;
    public $neighborhood;
    public $category_id;
    public $featured;
    public $postedby;

    public function mount()
    {
        $this->postedby = Auth::user()->name;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'type_id' => 'required',
            'status' => 'required',
            'location_id' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'floors' => 'required',
            'garages' => 'required',
            'area' => 'required',
            'size' => 'required',
            'SRprice' => 'required',
            'Bprice' => 'required',
            'Aprice' => 'required',
            'propertyID' => 'required',
            'videoURL' => 'required',
            'features_id' => 'required',
            'gallery' => 'required|mimes:png,jpg,jpeg,webp',
        ]);
    }

    public function storeProperty()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'type_id' => 'required',
            'status' => 'required',
            'location_id' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'floors' => 'required',
            'garages' => 'required',
            'area' => 'required',
            'size' => 'required',
            'SRprice' => 'required',
            'Bprice' => 'required',
            'Aprice' => 'required',
            'propertyID' => 'required',
            'videoURL' => 'required',
            'features_id' => 'required',
            'gallery' => 'required|mimes:png,jpg,jpeg,webp',
        ]);

        $property = new Property();
        $property->name = $this->name;
        $property->slug  = $this->slug;
        $property->description = $this->description;
        $property->type_id = $this->type_id;
        $property->status = $this->status;
        $property->location_id = $this->location_id;
        $property->bedrooms = $this->bedrooms;
        $property->bathrooms = $this->bathrooms;
        $property->floors = $this->floors;
        $property->garages = $this->garages;
        $property->area = $this->area;
        $property->size = $this->size;
        $property->SRprice = $this->SRprice;
        $property->Bprice = $this->Bprice;
        $property->Aprice = $this->Aprice;
        $property->propertyID = $this->propertyID;
        $property->videoURL = $this->videoURL;
        $property->features_id = str_replace("\n",',',trim($this->features_id));
        if($this->gallery)
        {
            $galleryname ='';
            foreach($this->gallery as $key=>$gallery)
            {
                $imageName = Carbon::now()->timestamp. $key. '.' . $this->gallery->extension();
                $gallery->storeAs('properties',$imageName);
                $galleryname = $galleryname . ',' .$imageName;
            }
            $property->gallery = $galleryname;
        }
        
        $property->featured = $this->featured;
        $property->postedby = $this->postedby;
        $property->save();
        session()->flash('message','Property has been created successfully!');
        $this->emit('imageUploaded');  
    }
    public function render()
    {
        $locations = Location::all();
        return view('livewire.user.user-add-properties-component',['locations'=>$locations])->layout('layouts.backend');
    }
}
