<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    // Add the casts property to automatically decode JSON
    protected $casts = [
        'gallery' => 'array',  // Assuming the column name is 'gallery'
    ];
}
