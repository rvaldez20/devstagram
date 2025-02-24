<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
   public function index()
   {
		return view('auth.register');
   }

   public function store(Request $request)
   {
      // dd($request);              // all request (many information)
      // dd($request->get('email'));   // only the field that especific

      //   Validacion
      $this->validate($request, [
         'name' => 'required|max:30',
      ]);



   }
}
