<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $data = Contact::all();
        return view('ContactUser',compact('data'));
    }

    public function LihatContact(){
        $data = Contact::all();
        return view('LihatContact', compact('data'));
    }
    public function contact(){
        return view('contact');
    }
    public function insertdata(Request $request){
        Contact::create($request->all());
        return redirect()->route('contact');
    }
    public function tampilkandata($id){
        $data = Contact::find($id);
        return view('EditContact', compact('data'));
    }

    public function updateContact(Request $request, $id){
        $data = Contact::find($id);
        $data->update($request->all()); 
        return redirect()->route('LihatContact');
    }

    public function deleteContact($id){
        $data = Contact::find($id);
        $data->delete(); 
        return redirect()->route('LihatContact');
    }
    
}
