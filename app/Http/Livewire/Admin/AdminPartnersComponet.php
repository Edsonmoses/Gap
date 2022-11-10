<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Partners;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminPartnersComponet extends Component
{
    use WithFileUploads;

    public $partners, $name, $slug, $desc, $image, $coverimg, $status, $partner_id;

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
        $this->status = '';
        $this->partner_id = '';
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
            if (file_exists('assets/user/images/partners' . '/' . $this->image)) {
                if (!empty(file_exists('assets/user/images/partners' . '/' . $this->image))) {
                    $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
                    $this->image->storeAs('partners', $imageName);
                } else {
                    unlink('assets/user/images' . '/' . $this->image);
                    $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
                    $this->image->storeAs('partners', $imageName);
                }
            } else {
                $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
                $this->image->storeAs('partners', $imageName);
            }
        }
        if ($this->coverimg) {
            if (file_exists('assets/user/images/partners' . '/' . $this->coverimg)) {
                if (!empty(file_exists('assets/user/images/partners' . '/' . $this->coverimg))) {
                    $downName = Carbon::now()->timestamp . '.' . $this->coverimg->extension();
                    $this->coverimg->storeAs('partners', $downName);
                    $this->coverimg = $downName;
                } else {
                    unlink('assets/user/images/partners' . '/' . $this->coverimg);
                    $downName = Carbon::now()->timestamp . '.' . $this->coverimg->extension();
                    $this->coverimg->storeAs('partners', $downName);
                    $this->coverimg = $downName;
                }
            } else {
                $downName = Carbon::now()->timestamp . '.' . $this->coverimg->extension();
                $this->coverimg->storeAs('partners', $downName);
                $this->coverimg = $downName;
            }
        }
        Partners::updateOrCreate(['id' => $this->partner_id], [

            'name' => $this->name,
            'slug' => $this->slug,
            'image' => $imageName,
            'desc' => $this->desc,
            'coverimg' => $downName,
            'status' => '1',

        ]);

        session()->flash(
            'message',
            $this->partner_id ? 'Partner Updated Successfully.' : 'Partner Created Successfully.'
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
        $partner = Partners::findOrFail($id);
        $this->partner_id = $id;
        $this->name  = $partner->name;
        $this->slug = $partner->slug;
        $this->image  = $partner->image;
        $this->desc = $partner->desc;
        $this->status = $partner->status;
        $this->coverimg = $partner->coverimg;

        $this->openModalPopedit();
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
        $this->partners = Partners::orderBy('created_at', 'desc')->latest()->get();
        return view('livewire.admin.admin-partners-componet')->layout('layouts.backend');
    }
}
