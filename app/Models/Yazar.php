<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Yazar extends Model
{
    public function newsCount(){
        return $this->hasMany('App\Models\News','yazar_id','id')->count();
    }
}
