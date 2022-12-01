<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Yazar;
use App\Models\Admin;
use App\Models\News;

class YazarController extends Controller
{
    public function index(){
        $data['admins']=Admin::orderBy('id','DESC')->get();
        $yazars=Yazar::all();
        return view('back.yazars.index',compact('yazars'),$data);
    }
    public function create(request $request){
        $isExist=Yazar::whereSlug(str_slug($request->yazar))->first();
        if($isExist){
            toastr()->error($request->yazar.' adında bir kategori mevcut!');
            return redirect()->back();
        }
        $yazar =new Yazar;
        $yazar->name=$request->yazar;
        $yazar->slug=str_slug($request->yazar);
        $yazar->save();
        toastr()->success('','Yazar Başarıyla Eklendi');
        return redirect()->back();
    }
    public function getData(Request $request){
        $yazar=Yazar::findOrFail($request->id);
        return response()->json($yazar);
    }
    public function update(request $request){
        $yazar = Yazar::find($request->id);
        $yazar->name=$request->yazar;
        $yazar->slug=str_slug($request->yazar);
        $yazar->save();
        toastr()->success('','Yazar Başarıyla Güncellendi');
        return redirect()->back();
    }
    public function delete(Request $request){
        $yazar=Yazar::findOrFail($request->id);
        $count=$yazar->newsCount();
        if($count>0){
        News::where('yazar_id',$yazar->id)->update(['yazar_id'=>1]);
        $defaultYazar=Yazar::find(1);
        toastr()->success('Bu yazara ait ' .$count. ' haber '.$defaultYazar->name. ' e taşındı.','Yazar Başarıyla Silindi');
        }
        $yazar->delete();
        toastr()->success('','Yazar başarıyla silindi');
        return redirect()->back();
    }
}    