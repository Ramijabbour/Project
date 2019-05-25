<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CategoriesController extends Controller
{
    public function app()
    {
    	$files=DB::table('files')->get();
    	return view ('AppPage',compact('files'));
    }

}
