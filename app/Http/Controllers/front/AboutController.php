<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;



class AboutController extends Controller
{
    public function about(){
        $data['news']=News::orderBy('created_at','DESC')->get();
        return view('front.about',$data);
    }
}
