<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;
use App\Jobs\SendEmail;


class EmailController extends Controller
{
    public function index()
    {
        return view('create');
    }
    public function create()
    {
        return view('create');
    }
    
    public function store(Request $request) 
    {  
        $data = $request->all();
        Email::create($data);
        
        $email=$request->get('addressee');
        $title=$request->get('title');
        $message=$request->get('message');
        $this->dispatch(new SendEmail($email, $title, $message));

        return redirect('/home');
    }
   
}
