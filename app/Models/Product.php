<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primaryKey = 'product_id';
    public $timestamps = false;


    public function properties() {
        return $this->hasMany(Property::class, 'product_id', 'product_id');
    }

    // public function classify() {
    //     return $this->hasMany(Categories::class, 'cat_id', 'cat_id');
    // }
}
