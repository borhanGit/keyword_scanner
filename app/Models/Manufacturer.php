<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'manufacturer_name',
        'description',
        'status',
        'image_name',
        'image_path',
    ];
}
