<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $username=$request->get('email');
        $password=$request->get('password');
        
        if('admin'==$username && 'admin'==$password){
            return view('pages/index');
        }else{
            return view('login');           
        }
       
    }
}