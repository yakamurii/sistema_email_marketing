<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;

class DetailsController extends Controller
{
    public function index()
    {
        return view('details');
    }
    public function show($id)
    { 
        $list = Email::find($id);
        return view('details', compact('list'));
    }
    
}
