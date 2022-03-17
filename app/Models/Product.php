<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'category_id',
        'sub_category_id',
        'manufacturer_id',
        'generic_id',
        'unit_id',
        'product_name',
        'description',
        'regular_price',
        'sale_price',
        'weight',
        'product_model',
        'status',
    ];


public function category()
    {
        return $this->belongsTo(Category::class);

    }
public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);

    }
public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);

    }
public function generic()
    {
        return $this->belongsTo(Generic::class);

    }
public function unit()
    {
        return $this->belongsTo(Unit::class);

    }
    public function productImage()
    {
          return $this->hasMany(ProductImage::class);
    }
}
