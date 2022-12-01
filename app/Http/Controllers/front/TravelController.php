<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;

class TravelController extends Controller
{
    public function travel(){
        $data['news']=News::orderBy('created_at','DESC')->limit(5)->get();
        return view('front.travel',$data);
    }
}
