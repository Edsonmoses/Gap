<?php

namespace App\Http\Livewire\Admin;

use App\Models\Features;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Field;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminAddFeaturesComponent extends Component
{
    public $name;
    public $slug;
    public $postedby;

    public $updateMode = false;
    public $inputs = [];
    public $i = 1;

    public function mount()
    {
        $this->postedby = Auth::user()->name;
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }
    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    private function resetInputFields(){

        $this->name = '';
        $this->slug = '';
    }

    /*public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name.0' => 'required',
            'slug.0' => 'required',
            'name.*' => 'required',
            'slug.*' => 'required',
        ]);
    }*/

    public function storeFeatures()
    {
        $this->validate([
            'name.0' => 'required',
            'slug.0' => 'required',
            'name.*' => 'required',
            'slug.*' => 'required',
        ]);

        foreach ($this->name as $key => $value) {

            Features::create(['name' => $this->name[$key], 'phone' => $this->slug[$key]]);

        }
        //$features = new Features();
        //$features->name = $this->name;
        //$features->slug = $this->slug;;
        //$features->postedby = $this->postedby;
        //$features->save();
        $this->inputs = [];
        $this->resetInputFields();
        session()->flash('message','Features has been created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-features-component')->layout('layouts.base');
    }
}
