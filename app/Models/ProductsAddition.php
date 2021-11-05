<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsAddition extends Model
{

    public $timestamps = false;
    public $fillable = [
        'product_id',
        'additions_id'
    ];


    public function additions()
    {
        return $this->belongsTo(Addition::class);
    }
}
