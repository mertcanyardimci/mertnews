<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Category;

class NewsController extends Controller
{
    public function news(){
        $data['news']=News::orderBy('created_at','DESC')->paginate(3);
        $data['categories']=Category::orderBy('created_at','ASC')->get();
        return view('front.news',$data);
    }
    public function category($slug){
        $category=Category::whereSlug($slug)->first() ?? abort(403,'Böyle bir kategori yok...');
        $data['category']=$category;
        $data['news']=News::where('category_id',$category->id)->orderBy('created_at','DESC')->paginate(1);
        return view('front.category',$data);
    }
}
