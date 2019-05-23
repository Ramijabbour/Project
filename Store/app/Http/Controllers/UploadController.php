<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\file;

class UploadController extends Controller
{
    public function show()
    {
    	return view('upload');
    }




    public function MakeUpload(Request $request)
    {
    	$file =new file;

    	//dd($request->File);
        if($UploadFile=$request->File('File'))
        {

            echo 'Unploaded</br>';
            $file->name=$request->name;
            $file->size=$request->size;
            $file->description='finalllllllly uploaded succeffull';
            $file->price='100';
            $file->user_id='1';
            $file->category_id='1';
           // $IconName=$photo->getClientOriginalName();
            $FileName=$UploadFile->getClientOriginalName();
            if($UploadFile->move('uploadedFile', $FileName))
            {
            $file->icon='IconName';
            $file->path=$FileName;
            $file->save();
            echo ' file name '.$file->path .'';
            
            //echo '<img src="uploadedIcon/'.$IconName.' ">';
    	    }
    	}
        else 
        {
            echo 'failed';
        }
    }
}
