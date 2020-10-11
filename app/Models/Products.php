<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Products extends Model {
    public static function find($id)
    {
        return DB::table('product')->where('id',$id);
    }
}
