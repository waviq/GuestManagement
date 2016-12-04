<?php

namespace App\Http\Controllers;

use App\Guest;
use App\Http\Requests\GuestRequest;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;

class GuestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['only'=>['admin','indexAdmin']]);
    }

    public function index(){
        $guests = Guest::paginate(20);

        return view('guest.index',compact('guests'));
    }

    public function create(){
        return view('guest.createGuest');
    }

    public function store(GuestRequest $request){
        return $this->saveGuest();
    }

    public function getLogout(){
        Auth::logout();
        alert()->success('Succes Logout');
        return redirect(url(action('LoginController@getLogin')));
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    private function saveGuest()
    {
        $guest = new Guest();
        $guest->name = Input::get('name');
        $guest->address = Input::get('address');
        $guest->phone = Input::get('phone');
        $guest->note = Input::get('note');

        $guest->save();
        alert()->success('saved');
        return redirect(url(action('GuestController@index')));
    }
}
