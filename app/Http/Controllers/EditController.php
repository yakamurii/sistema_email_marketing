<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;

class EditController extends Controller
{
    public function index()
    {
        return view('edit');
    }
    public function show($id)
    {
        $list = Email::find($id);
        return view('details', compact('list'));
    }
    public function edit($id)
    {
        $list = Email::find($id);
        if(isset($id))
        {
            return view('edit', compact('list'));
        }
        return redirect('/home');
    }
    public function update(Request $request, $id)
    {
        $data= Email::find($id);
        if(isset($id))
        {
            $data->addressee = $request->input('addressee');
            $data->title = $request->input('title');
            $data->message= $request->input('message');

            $data->save();
        }
        return redirect('/home');
    }
}
