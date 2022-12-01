<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class News extends Model
{
    function getCategory(){
        return $this->hasOne('App\Models\Category','id','category_id');
    }
    function getYazar(){
        return $this->hasOne('App\Models\Yazar','id','yazar_id');
    }

}
