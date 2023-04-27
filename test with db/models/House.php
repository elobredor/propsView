<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameProperty',
        'namesProject',
        'location',
        'price',
        'baths',
        'bedrooms',
        'dimensions',
        'rooms'
    ];
}
