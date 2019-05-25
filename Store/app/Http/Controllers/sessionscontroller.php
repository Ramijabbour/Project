<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionscontroller extends Controller
{
    public function show()
	{
		return view('login');
	}    

	public function store()
	{
		if(! auth()->attempt(request(['email','password'])))
		{
			return back()->withErrors([
				'massage'=>'Email or password not correct ! '
			]);
		}
		return redirect('files');
	}

    
    public function logout()
	{
		auth()->logout();

		return redirect('files');
	}
}
