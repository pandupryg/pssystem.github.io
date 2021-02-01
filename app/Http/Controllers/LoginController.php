<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //direct halaman login saat menekan navbar login
    public function login(){
        
        return view('pages/login');
    }

    public function login_new(Request $request){
        $rememberme = $request->get('remember');
        if(!auth()->attempt(['email' => $request->email, 'password' => $request->password], $rememberme)){
            return redirect()->back();
        }
        return redirect()->route('home');
    }

    //kembali ke halaman login saat user logout
    public function logout(){
        auth()->logout();

        return view('/pages/login');
    }

 

    

    // public function index(Request $request)
    // {
  
    //     if ($request->user()->hasRole('user')) {
    //         return redirect('user');
    //     }

    //     if ($request->user()->hasRole('admin')){
    //         return redirect('admin');
    //     }
 
    // }

}
