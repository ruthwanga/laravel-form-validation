<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function formSubmit(Request $req)
    {
       $req->validate([
          'email'=>"required | max:6",
           'user'=>"required"
           
       ]);
       dd($req->all());
        print_r($req->input());
    }
}
