<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classify;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'cat_id';
    public $timestamps = false;

    public function classifies()
    {
        return $this->hasMany(Classify::class, 'cat_id', 'cat_id');
    }
}
