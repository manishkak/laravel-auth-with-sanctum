<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $table = 'my_test_table'; //Used in case the table name is different
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price'
    ];
}
