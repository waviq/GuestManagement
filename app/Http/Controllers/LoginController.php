<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['except'=>'getLogout']);
    }

    public function getLogin(){
        return view('Login.index');
    }

    public function postLogin(Request $request){
        if (Auth::attempt([
            'email' => $request->emailOrUsername,
            'password' => $request->password
        ])
        ) {
            alert()->success('Succes Login');
            return redirect(url(action('AdminController@index')));
        } elseif (Auth::attempt([
            'username' => $request->emailOrUsername,
            'password' => $request->password
        ])
        ) {
            alert()->success('Succes Login');
            return redirect(url(action('AdminController@index')));
        } else {
            alert()->error('Check your user/password');
            return redirect(url(action('LoginController@getLogin')));
        }
    }

    public function getLogout(){
        Auth::logout();
        alert()->success('Succes Logout');
        return redirect(url(action('LoginController@getLogin')));
    }
}
