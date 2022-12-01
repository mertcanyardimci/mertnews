<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Category;
use App\Models\Admin;
use App\Models\Yazar;


class NewsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $data['admins']=Admin::orderBy('id','DESC')->get();
        $news=News::orderBy('created_at','ASC')->paginate(3);
        return view ('back.news.index',compact('news',),$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['admins']=Admin::orderBy('id','DESC')->get();
        $categories=Category::all();
        $yazars=Yazar::all();
        return view('back.news.create',compact('categories','yazars'),$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'title'=>'min:3',
            'image'=>'required|image|mimes:jpeg,png,jpg'
        ]);


        $news=new News;
        $news->title=$request->title;
        $news->category_id=$request->category;
        $news->yazar_id=$request->yazar;
        $news->content=$request->content;
        if ($request->hasFile('image')){
            $imageName=str_slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $news->image='uploads'.$imageName;
        }
        $news->save();
        toastr()->success('Başarılı', 'Haber oluşturuldu');
        return redirect()->route('admin.haberler.index');
        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['admins']=Admin::orderBy('id','DESC')->get();
        $news=News::findOrFail($id);
        $categories=Category::all();
        $yazars=Yazar::all();
        return view('back.news.update',compact('categories','news','yazars'),$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data['admins']=Admin::orderBy('id','DESC')->get();
        $request->validate([
            'title'=>'min:3',
            'image'=>'image|mimes:jpeg,png,jpg'
        ]);


        $news= News::findOrFail($id);
        $news->title=$request->title;
        $news->category_id=$request->category;
        $news->yazar_id=$request->yazar;
        $news->content=$request->content;
        if ($request->hasFile('image')){
            $imageName=str_slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $news->image='uploads'.$imageName;
        }
        $news->save();
        toastr()->success('Başarılı', 'Haber güncellendi');
        return redirect()->route('admin.haberler.index',$data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
       $news=News::findOrFail($request->id);
       $news->delete();
       toastr()->success('','Haber başarıyla silindi');
       return redirect()->back();
    }
    
    public function destroy($id)
    {
        //
    }
}
