<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $guests = Guest::paginate(20);
        return view('admin.index', compact('guests'));
    }

    public function destroy($id){
        $guest = Guest::findOrFail($id);
        $guest->delete();

        alert()->success('Deleted');
        return redirect(url(action('AdminController@index')));
    }
}
