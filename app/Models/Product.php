<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //protected $table='protected';
    protected $fillable = ['name', 'desc', 'product_number', 'branch', 'price'];
}
