<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $list = Email::all();
        return view('home', compact('list'));
    }
    public function destroy($id)
    {
        $del = Email::find($id);
        if(isset($id))
        {
            $del->delete();
        }
        return redirect('/home');
    }
}
