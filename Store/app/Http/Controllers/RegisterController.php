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
    		'Name'=>'required|min :4 ',
    		'Email'=>'required',
    		'Password'=>'required|min:6',
            'Gender'=>'required',
            'Date'=>'required'
    		]);
    	$user =new User;
    	$user->name=$request->Name;
    	$user->email=$request->Email;
        $user->gender=$request->Gender;
    	$user->password=bcrypt($request->Password);
    	$user->Date=$request->Date;
    	$user->admin=0;

    	$user->save();

    	auth()->login($user);
		
		return redirect('/home');
    }

    	
}
