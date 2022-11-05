<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
 

    use AuthenticatesUsers;

    //protected $redirectTo = RouteServiceProvider::HOME;
    protected function Authenticated()
    {
        if(Auth::user()->role_as == '1'){
            return redirect('/admin')->with('status','Welcome');
        }
        else{
            return redirect('/home')->with('status','Log in successfully');
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
