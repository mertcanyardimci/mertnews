<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('back.login');
    }
    public function loginpost(Request $request){
      if(Auth::attempt(['username'=>$request->username,'password'=>$request->password])){
        return  redirect()->route('admin.dashboard');
      }
      return redirect()->route('admin.login')->withErrors('Kullanıcı adı veya sifre hatalı!');
      


    }
    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }

}