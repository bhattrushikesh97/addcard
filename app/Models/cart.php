<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'item',
        'price',
        'description',
        'image',
        'quantity',
        'product_id',
        'total',
    ];

}