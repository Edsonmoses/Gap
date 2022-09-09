<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'slug', 'desc', 'price', 'image', 'coverim', 'call', 'whatsapp', 'finance', 'status'
    ];
}
