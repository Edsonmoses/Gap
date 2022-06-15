<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $table="locations";
    protected $fillable = ['address','country','city','state','zipcode','neighborhood'];

    public function properties()
    {
        return $this->hasMany(Property::class, 'location_id', 'id'); // we can also include comment model like: 'App\Models\Comment'
    }
}
