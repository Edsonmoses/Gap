<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Cars;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminOurCarsComponet extends Component
{
    use WithFileUploads;
    public $cars, $name, $slug, $desc, $price, $image, $coverimg, $call, $whatsapp, $finance, $status, $car_id;
    public $isModalOpen = 0;
    public $editModalOpen = 0;

    public $updateMode = false;
    public $inputs = [];
    public $i = 1;


    /**
     * Write code on Method
     * @return response()
     */

    public function add($i)

    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }



    /**

     * Write code on Method
     * @return response()
     */

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }
    public function openModalPopedit()
    {
        $this->editModalOpen = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }
    public function closeModalPopedit()
    {
        $this->editModalOpen = false;
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
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetCreateForm()
    {
        $this->name = '';
        $this->slug = '';
        $this->reset('image');
        $this->desc = '';
        $this->reset('coverimg');
        $this->price = '';
        $this->call = '';
        $this->whatsapp = '';
        $this->finance = '';
        $this->status = '';
        $this->car_id = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([

            'name' => 'required ',
            'slug' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
            'desc' => 'required',
            'coverimg' => 'required|mimes:png,jpg,jpeg',
        ]);
        if ($this->image) {
            $imagesname = '';
            foreach ($this->image as $key => $image) {
                $imgName = Carbon::now()->timestamp . $key . '.' . $image->extension();
                $image->storeAs('properties', $imgName);
                $imagesname = $imagesname . ',' . $imgName;
            }
            $this->image =  $imagesname;
        }
        if ($this->coverimg) {
            if (file_exists('assets/user/images/cars' . '/' . $this->coverimg)) {
                if (!empty(file_exists('assets/user/images/cars' . '/' . $this->coverimg))) {
                    $downName = Carbon::now()->timestamp . '.' . $this->coverimg->extension();
                    $this->coverimg->storeAs('cars', $downName);
                    $this->coverimg = $downName;
                } else {
                    unlink('assets/user/images/cars' . '/' . $this->coverimg);
                    $downName = Carbon::now()->timestamp . '.' . $this->coverimg->extension();
                    $this->coverimg->storeAs('cars', $downName);
                    $this->coverimg = $downName;
                }
            } else {
                $downName = Carbon::now()->timestamp . '.' . $this->coverimg->extension();
                $this->coverimg->storeAs('cars', $downName);
                $this->coverimg = $downName;
            }
        }
        Cars::updateOrCreate(['id' => $this->car_id], [

            'name' => $this->name,
            'slug' => $this->slug,
            'image' => $imagesname,
            'desc' => $this->desc,
            'coverimg' => $downName,
            'status' => '1',
            'price' => $this->price,
            'call' => $this->call,
            'whatsapp' => $this->whatsapp,
            'finance' => $this->finance,

        ]);

        session()->flash(
            'message',
            $this->car_id ? 'car Updated Successfully.' : 'car Created Successfully.'
        );

        //$this->closeModal();
        $this->resetCreateForm();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $car = Cars::findOrFail($id);
        $this->car_id = $id;
        $this->name  = $car->name;
        $this->slug = $car->slug;
        $this->image  = $car->image;
        $this->desc = $car->desc;
        $this->status = $car->status;
        $this->coverimg = $car->coverimg;
        $this->price = $car->price;
        $this->call = $car->call;
        $this->whatsapp = $car->whatsapp;
        $this->finance = $car->finance;

        $this->openModalPopedit();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Cars::find($id)->delete();
        session()->flash('message', 'Car Deleted Successfully.');
    }

    public function render()
    {
        $this->cars = Cars::orderBy('name')->get();
        return view('livewire.admin.admin-our-cars-componet')->layout('layouts.backend');
    }
}
