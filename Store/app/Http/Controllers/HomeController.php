<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    public function show()
    {
    	$files = DB::table('files')->get();
    	return view('home' , compact('files'));
    }

    public function show1()
    {
    	
    	return view('homepage');
    }
 
    public function showerror()
    {
        
        return view('errorPage');
    }


      public function display()
    {
    	return view('login' );
    }
}
