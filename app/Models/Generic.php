<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generic extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'generic_name',
        'description',
        'status',
        
    ];
}
