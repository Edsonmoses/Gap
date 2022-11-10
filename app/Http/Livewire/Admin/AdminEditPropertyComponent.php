<?php

namespace App\Http\Livewire\Admin;

use App\Models\Agents;
use Carbon\Carbon;
use App\Models\Type;
use Livewire\Component;
use App\Models\Category;
use App\Models\Features;
use App\Models\Location;
use App\Models\Property;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class AdminEditPropertyComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $image;
    public $description;
    public $type_id;
    public $status;
    public $location_id;
    public $locations;
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
    public $category_id;
    public $featured;
    public $postedby;
    public $newimage;
    public $newgallery;
    public $exclusive;
    public $pin;
    public $fromDate;
    public $toDate;
    public $active;
    public $agent_id;

    public function mount($slug)
    {
        $property = Property::where('slug', $slug)->first();
        $this->name = $property->name;
        $this->slug = $property->slug;
        $this->image = $property->image;
        $this->description = $property->description;
        $this->type_id = $property->type_id;
        $this->status = $property->status;
        $this->location_id = $property->location_id;
        $this->locations = $property->locations;
        $this->bedrooms = $property->bedrooms;
        $this->bathrooms = $property->bathrooms;
        $this->floors = $property->floors;
        $this->garages = $property->garages;
        $this->area = $property->area;
        $this->size = $property->size;
        $this->SRprice = $property->SRprice;
        $this->Bprice = $property->Bprice;
        $this->Aprice = $property->Aprice;
        $this->propertyID = $property->propertyID;
        $this->videoURL = $property->videoURL;
        $this->features_id = $property->features_id;
        $this->gallery = explode(",", $property->gallery);
        $this->property_id = $property->id;
        $this->featured = str_replace("\n", ',', trim($property->featured));
        $this->exclusive = $property->exclusive;
        $this->category_id = $property->category_id;;
        $this->pin = $property->pin;
        $this->pin = $property->fromDate;
        $this->pin = $property->toDate;
        $this->postedby = Auth::user()->name;
        $this->category_id = $property->category_id;
        $this->active = $property->active;
        $this->agent_id = $property->agent_id;
    }
    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    /*public function updated($fields)
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
        ]);
         if($this->newimage)
        {
            $this->validateOnly($fields,[
                'newimage' => 'required|mimes:png,jpg,jpeg,webp'
            ]);
        }
         if($this->newgallery)
        {
            $this->validateOnly($fields,[
                'newgallery' => 'required|mimes:png,jpg,jpeg,webp'
            ]);
        }
    }*/

    public function storeProperty()
    {
        /* $this->validate([
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
        ]);
        if($this->newimage)
        {
            $this->validate([
                'newimage' => 'required|mimes:png,jpg,jpeg,webp'
            ]);
        }
         if($this->newgallery)
        {
            $this->validate([
                'newgallery' => 'required|mimes:png,jpg,jpeg,webp'
            ]);
        }*/

        $property = Property::find($this->property_id);
        $property->name = $this->name;
        $property->slug  = $this->slug;
        $property->description = $this->description;
        $property->type_id = $this->type_id;
        $property->status = $this->status;
        $property->location_id = $this->location_id;
        $property->locations = $this->locations;
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
        $property->features_id = $this->features_id;
        if ($this->newimage) {
            if ($property->image) {
                unlink('assets/user/assets/images/page-titles' . '/' . $property->image);
            }
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('page-titles', $imageName);
            $property->image = $imageName;
        }
        if ($this->newgallery) {
            if ($property->gallery) {
                $images = explode(",", $property->gallery);
                foreach ($images as $image) {
                    /* if($image)
                    {
                        unlink('passets/user/assets/images/roperties/slider'.'/'.$image); 
                    }*/
                }
            }

            $imagesname = '';
            foreach ($this->newgallery as $key => $image) {
                $imgName = Carbon::now()->timestamp . $key . '.' . $image->extension();
                $image->storeAs('properties', $imgName);
                $imagesname = $imagesname . ',' . $imgName;
            }
            $property->gallery =  $imagesname;
        }

        $property->featured = str_replace("\n", ',', trim($this->featured));
        $property->exclusive = $this->exclusive;
        $property->postedby = $this->postedby;
        $property->category_id = $this->category_id;
        $property->pin = $this->pin;
        $property->fromDate = $this->fromDate;
        $property->toDate = $this->toDate;
        $property->active = $this->active;
        $property->agent_id = $this->agent_id;
        $property->save();
        session()->flash('message', 'Property has been updated successfully!');
        return redirect('/admin/add-property');
    }
    public function render()
    {
        $Locations = Location::all();
        $ptype = Type::all();
        $featureds = Features::all();
        $category = Category::all();
        $pagents = Agents::all();
        return view('livewire.admin.admin-edit-property-component', ['Locations' => $Locations, 'ptype' => $ptype, 'featureds' => $featureds, 'category' => $category, 'pagents' => $pagents])->layout('layouts.backend');
    }
}
