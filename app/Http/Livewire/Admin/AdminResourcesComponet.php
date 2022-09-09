<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Resources;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminResourcesComponet extends Component
{
    use WithFileUploads;
    public $resources, $name, $slug, $pdf, $coverimg, $status, $resources_id;

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
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetCreateForm()
    {
        $this->name = '';
        $this->slug = '';
        $this->reset('pdf');
        $this->reset('coverimg');
        $this->status = '';
        $this->resource_id = '';
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
            'coverimg' => 'required|mimes:png,jpg,jpeg',
        ]);
        if ($this->pdf) {
            if (file_exists('assets/user/images/resources' . '/' . $this->pdf)) {
                if (!empty(file_exists('assets/user/images/resources' . '/' . $this->pdf))) {
                    $imageName = Carbon::now()->timestamp . '.' . $this->pdf->extension();
                    $this->pdf->storeAs('resources', $imageName);
                } else {
                    unlink('assets/user/images/resources' . '/' . $this->pdf);
                    $imageName = Carbon::now()->timestamp . '.' . $this->pdf->extension();
                    $this->pdf->storeAs('resources', $imageName);
                }
            } else {
                $imageName = Carbon::now()->timestamp . '.' . $this->pdf->extension();
                $this->pdf->storeAs('resources', $imageName);
            }
        }
        if ($this->coverimg) {
            if (file_exists('assets/user/images/resources' . '/' . $this->coverimg)) {
                if (!empty(file_exists('assets/user/images/resources' . '/' . $this->coverimg))) {
                    $downName = Carbon::now()->timestamp . '.' . $this->coverimg->extension();
                    $this->coverimg->storeAs('resources', $downName);
                    $this->coverimg = $downName;
                } else {
                    unlink('assets/user/images/resources' . '/' . $this->coverimg);
                    $downName = Carbon::now()->timestamp . '.' . $this->coverimg->extension();
                    $this->coverimg->storeAs('resources', $downName);
                    $this->coverimg = $downName;
                }
            } else {
                $downName = Carbon::now()->timestamp . '.' . $this->coverimg->extension();
                $this->coverimg->storeAs('resources', $downName);
                $this->coverimg = $downName;
            }
        }
        Resources::updateOrCreate(['id' => $this->resource_id], [

            'name' => $this->name,
            'slug' => $this->slug,
            'pdf' => $imageName,
            'coverimg' => $downName,
            'status' => '1',

        ]);

        session()->flash(
            'message',
            $this->resource_id ? 'Resource Updated Successfully.' : 'Resource Created Successfully.'
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
        $resource = Resources::findOrFail($id);
        $this->resource_id = $id;
        $this->name  = $resource->name;
        $this->slug = $resource->slug;
        $this->pdf  = $resource->pdf;
        $this->status = $resource->status;
        $this->coverimg = $resource->coverimg;

        $this->openModalPopedit();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Resources::find($id)->delete();
        session()->flash('message', 'Resource Deleted Successfully.');
    }
    public function render()
    {
        $this->resources = Resources::orderBy('name')->get();
        return view('livewire.admin.admin-resources-componet')->layout('layouts.backend');
    }
}
