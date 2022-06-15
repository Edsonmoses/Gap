<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
        protected $fillable = ['location_id','features_id','category_id'];
    
     public function locations()
    {
        return $this->belongsTo('App\Models\Location');
    }
}
