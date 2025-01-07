<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    protected $table = 'shoes';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id', 'brand', 'model', 'size', 'color', 'price', 'category'
    ];
}

