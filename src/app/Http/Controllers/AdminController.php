<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index()
   {
      $contacts = Contact::all();

      return view('admin', compact('contacts'));
   }
   public function store(Request $request)
   {
      $admin = $request->only(['content']);
      return view('admin');
   }
}
