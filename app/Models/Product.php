<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'sku',
        'name',
        'price',
        'type_id'
    ];

    public function type(){
        return $this->belongsTo(Type::class);
    }


    public function productAdditions(){
        return $this->hasMany(ProductsAddition::class);
    }
}
