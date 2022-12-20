<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'title',
        'description',
        'link',
        'brand',
        'type',
        'image_link',
        'price',
        'gender',
        'color',
        'size',
    ];

}
