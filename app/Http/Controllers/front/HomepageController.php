<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Category;

class HomepageController extends Controller
{
    public function index(){
        $data['news']=News::orderBy('created_at','DESC')->paginate(2);
        $data['categories']=Category::orderBy('created_at','ASC')->get();
        return view('front.Homepage',$data);
    }
    public function single($id){
        $data['new']=News::whereId($id)->first() ?? abort(403,'Böyle bir haber yok...');
        $data['new']->increment('hit');
        $data['news']=News::orderBy('created_at','DESC')->get();
        return view('front.haber',$data);
    }
    public function category($slug){
        $category=Category::whereSlug($slug)->first() ?? abort(403,'Böyle bir kategori yok...');
        $data['categories']=Category::orderBy('created_at','ASC')->get();
        $data['category']=$category;
        $data['news']=News::where('category_id',$category->id)->orderBy('created_at','DESC')->get();
        return view('front.category',$data);
    }
}
