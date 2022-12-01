<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Admin;
use App\Models\News;

class CategoryController extends Controller
{
    public function index(){
        $data['admins']=Admin::orderBy('id','DESC')->get();
        $categories=Category::all();
        return view('back.categories.index',compact('categories'),$data);
    }
    public function create(request $request){
        $isExist=Category::whereSlug(str_slug($request->category))->first();
        if($isExist){
            toastr()->error($request->category.' adında bir kategori mevcut!');
            return redirect()->back();
        }
        $category =new Category;
        $category->name=$request->category;
        $category->slug=str_slug($request->category);
        $category->save();
        toastr()->success('Kategori Başarıyla Oluşturuldu');
        return redirect()->route('admin.categories.index');
    }
    public function getData(Request $request){
        $category=Category::findOrFail($request->id);
        return response()->json($category);
    }
    public function update(request $request){
        $isName=Category::whereName(($request->category))->whereNotIn('id',[$request->id])->first();
        if($isName){
            toastr()->error($request->category.' adında bir kategori mevcut!');
            return redirect()->back();
        }
        $category = Category::find($request->id);
        $category->name=$request->category;
        $category->slug=str_slug($request->category);
        $category->save();
        toastr()->success('','Kategori Başarıyla Güncellendi');
        return redirect()->route('admin.categories.index');
    }
    public function delete(Request $request){
        $category=Category::findOrFail($request->id);
        $count=$category->newsCount();
        if($count>0){
        News::where('category_id',$category->id)->update(['category_id'=>1]);
        $defaultCategory=Category::find(1);
        toastr()->success('Bu kategoriye ait ' .$count. ' haber '.$defaultCategory->name. ' kategorisine taşındı.','Kategori Başarıyla Silindi');
        }
        $category->delete();
        toastr()->success('','Kategori başarıyla silindi');
        return redirect()->back();
    }

}
