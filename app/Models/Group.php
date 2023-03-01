<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Group extends Model
{
    use HasFactory;
    protected $table = 'classify_group';
    protected $primaryKey = 'classify_group_id';
    public $timestamps = false;

    public function classifyProducts()
    {
        return $this->hasMany(Product::class, 'classify_group_id', 'classify_group_id');
    }
}
