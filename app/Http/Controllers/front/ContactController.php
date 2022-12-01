<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact(){
        $data['news']=News::orderBy('created_at','DESC')->get();
        return view('front.contact',$data);
    }
    public function contactpost(Request $request){
        $contact = new Contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->phone=$request->phone;
        $contact->topic=$request->topic;
        $contact->message=$request->message;
        $contact->save();
        toastr()->success('Mesajınız iletildi','Başarılı');
        return redirect()->route('contact');
    }

}

