<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\game;
use App\file;
use App\app;
use App\movie;

use DB;
use Illuminate\Support\Facades\Input;

class UploadController extends Controller
{
    public function show()
    {
        $categories = DB::table('categories')->get();
    	return view('uploads.upload',compact("categories"));
    }




 public function MakeUpload(Request $request)
    {
        $file =new file;

        if(Input::hasFile('file') && Input::hasFile('icon'))
        {
            $uploadedfile = Input::file('file');
            $uploadedIcon=Input::file('icon');

            if($uploadedIcon->getClientOriginalExtension()!='png' &&$uploadedIcon->getClientOriginalExtension()!='jpg' &&$uploadedIcon->getClientOriginalExtension()!='tif'&&$uploadedIcon->getClientOriginalExtension()!='bmp')
            {
                echo "falseeeeeeeeeeeee";
                return redirect('errors');
            }

            if($request->category == 1 )
            {
                if($uploadedfile->getClientOriginalExtension()!='exe' &&$uploadedfile->getClientOriginalExtension()!='apk')
                {
                    echo "nooooooooooo app";

                    return redirect('errors');
                }

            }
            else if ($request->category == 2)
            {
                if($uploadedfile->getClientOriginalExtension()!='exe' &&$uploadedfile->getClientOriginalExtension()!='apk')
                {
                    echo "nooooooooooo game ";
                    return redirect('errors');
                }
            }
            else if ($request->category == 3)
            {
                if($uploadedfile->getClientOriginalExtension()!='mp4' &&$uploadedfile->getClientOriginalExtension()!='3gp'&&$uploadedfile->getClientOriginalExtension()!='avi')
                {
                    echo "nooooooooooo movie";
                    return redirect('errors');
                }
                
            }

            else if ($request->category == 4)
            {
                 if($uploadedfile->getClientOriginalExtension()!='m4a' &&$uploadedfile->getClientOriginalExtension()!='mp3')
                {
                    echo "nooooooooooo  music";
                    return redirect('errors');
                }
            }

            else if ($request->category == 5)
            {
                   if($uploadedfile->getClientOriginalExtension()!='pdf')
                {
                    echo "nooooooooooo  book";
                    return redirect('errors');
                }
            }

            $file->name=$request->name;
            $file->size=$request->size;
            $file->description=$request->description;
            $file->price=$request->price;
            $file->user_id=$request->user_id;
            $file->category_id=$request->category;
            $FileName=$uploadedfile->getClientOriginalName();
            $uploadedfile->move('uploadedFile',$FileName);
            $file->path=$FileName;
            $IconName =$uploadedIcon->getClientOriginalName();
            $uploadedIcon->move('uploadedIcon',$IconName);
            $file->icon=$IconName;
            $file->save();
            $file_id = $file->id;
            $cat=$file->category_id;
            if($cat==1)    
                return view('uploads.AppUpload',compact("file_id"));

            if($cat==2)    
                return view('uploads.GameUpload',compact("file_id"));
           if($cat==3)    
                return view('uploads.MovieUpload',compact("file_id"));
            if($cat==4)    
                return view('uploads.MusicUpload',compact("file_id"));
            if($cat==5)    
                return view('uploads.BookUpload',compact("file_id"));

        }    
        else 
        {
            echo "failed";
        }   

    }


 public function UploadGame(Request $request)
    {

        $game=new game;
        $game->System_requirment=$request->Requierment;
        $game->file_id=$request->file_id;
        $game->save();
        echo "succefull";
       return redirect('files');
        
       
    }

public function UploadApp(Request $request)
    {

        $app=new app;
        $app->System_requirment=$request->Requierment;
        $app->file_id=$request->file_id;
        $app->save();
        echo "succefull";
       return redirect('files');      
    }

public function UploadMovie(Request $request)
    {

        $movie=new movie;
        
        $movie->file_id=$request->file_id;
        $movie->save();
        echo "succefull";
       return redirect('files');      
    }

}
