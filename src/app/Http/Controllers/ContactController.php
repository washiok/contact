<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
     {
        $contact = $request->only(['last_name','first_name', 'sex', 'email', 'tel', 'address', 'building', 'select', 'content']);
        // dd($request);
        return view('confirm', compact('contact'));
     }
public function store(Request $request)
   {
    $contact = $request->only(['last_name','first_name', 'sex', 'email', 'tel', 'address', 'building', 'select', 'content']);
        
        return view('thanks');
   }
//    public function login()
//    {
//        return view('login');
//    }
//    public function register()
//    {
//        return view('register');
//    }
}
