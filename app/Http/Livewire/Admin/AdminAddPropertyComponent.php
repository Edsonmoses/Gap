<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Features;
use App\Models\Location;
use App\Models\Property;
use App\Models\Type;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddPropertyComponent extends Component
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
    public $exclusive;
    public $postedby;
    public $pin;
    public $active;

    public function mount()
    {
        $this->postedby = Auth::user()->name;
        $this->category_id = '0';
        $this->active = 'Isactive';
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
         if($this->image)
        {
            $this->validate([
                'image' => 'required|mimes:png,jpg,jpeg,webp'
            ]);
        }
         if($this->gallery)
        {
            $this->validate([
                'gallery' => 'required|mimes:png,jpg,jpeg,webp'
            ]);
        }
    }*/

    public function storeProperty()
    {
        /*$this->validate([
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
         if($this->image)
        {
            $this->validate([
                'image' => 'required|mimes:png,jpg,jpeg,webp'
            ]);
        }
         if($this->gallery)
        {
            $this->validate([
                'gallery' => 'required|mimes:png,jpg,jpeg,webp'
            ]);
        }*/

        $property = new Property();
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
        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('page-titles', $imageName);
        $property->image = $imageName;
        if ($this->gallery) {
            $imagesname = '';
            foreach ($this->gallery as $key => $image) {
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
        $property->active = $this->active;
        $property->save();
        session()->flash('message', 'Property has been created successfully!');
        return redirect('/admin/add-property');
    }

    public function render()
    {
        $Locations = Location::all();
        $ptype = Type::all();
        $featureds = Features::all();
        $category = Category::all();
        return view('livewire.admin.admin-add-property-component', ['Locations' => $Locations, 'ptype' => $ptype, 'featureds' => $featureds, 'category' => $category])->layout('layouts.backend');
    }
}
