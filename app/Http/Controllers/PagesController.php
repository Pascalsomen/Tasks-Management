<?php

namespace App\Http\Controllers;
use\Auth;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function login()
    {
        return view('Auth.login');
    }

     public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        $user_email = $request['email'];
        $user_password = $request['password'];
       if(Auth::attempt(['email'=>$user_email,'password'=>$user_password])){
       	 return redirect('tasks.index');
       }

    }

    public function logout()
    {
        return Auth::logout();
    }
}
