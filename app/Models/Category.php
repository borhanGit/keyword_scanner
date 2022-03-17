<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category_name',
        'description',
        'status'
    ];

    public function subCategory()
    {
        return $this->hasMany('App\Models\SubCategory');        
    }
}
