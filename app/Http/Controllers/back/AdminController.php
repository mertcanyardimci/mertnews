<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Admin;
use App\Models\Contact;

class AdminController extends Controller
{
    public function index(){
        $data['admins']=Admin::orderBy('id','DESC')->get();
        $data['news']=News::orderBy('created_at','DESC')->paginate(3);
        $data['contacts']=Contact::orderBy('created_at','DESC')->limit(10)->get();
        return view('back.admin',$data);
    }
}
