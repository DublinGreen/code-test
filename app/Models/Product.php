<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $table = 'products';

    protected $fillable = [
        'id',
        'name',
        'description',
        'price',
        'image',
        'created_at',
        'updated_at'
    ];

    // protected $hidden = ['id','image'];

}