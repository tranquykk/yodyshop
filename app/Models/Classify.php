<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Group;

class Classify extends Model
{
    use HasFactory;
    protected $table = 'classify';
    protected $primaryKey = 'classify_id';
    public $timestamps = false;

    // public static function getClassify() {
    //     return DB::table('blog as b')->join('category as c', 'b.cat_id', '=', 'c.cat_id')->join('user as u', 'b.user_id', '=', 'u.id')->orderBy('b.sort')->select('b.*', 'c.name as cname', 'fullname')->paginate(getenv('ROW_COUNT'));
    // }

    public function classifyGroups()
    {
        return $this->hasMany(Group::class, 'classify_id', 'classify_id');
    }
}
