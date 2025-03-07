<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(Request $request){
        dd($request->all());
    }

    public function destroy(){
        //Tiene que ser en un método post
        Auth::logout();

        return redirect('/');
    }
}
