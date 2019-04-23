<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function register()
    {
        return view('Register');
    }

    public function store(Request $request)
    {
    		$this->validate(request() ,[
    		'Name'=>'required',
    		'Email'=>'required',
    		'Password'=>'required'
    		]);
    	$user =new User;
    	$user->name=$request->Name;
    	$user->email=$request->Email;
    	$user->password=bcrypt($request->Password);
    	$user->Date=$request->Date;
    	$user->admin=$request->Admin;

    	$user->save();

    	auth()->login($user);
		
		return redirect('/home');
    }

    	
}
