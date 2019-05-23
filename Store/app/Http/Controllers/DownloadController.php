<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\file;

class DownloadController extends Controller
{
    //
    public function show(file $file)
    {
    	return view ('login',compact('file'));
    }

    public function display()
    {
    	return view('login');
    }

}
