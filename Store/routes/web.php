<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home','HomeController@show1');

Route::get('/Register','RegisterController@register');
Route::post('/Register','RegisterController@store');

Route::get('/login','sessionscontroller@show');
Route::post('/login','sessionscontroller@store');

Route::get('/logout','sessionscontroller@logout');

Route::get('/upload','UploadController@show',);
Route::post('/upload','UploadController@MakeUpload');

Route::get('/apps','CategoriesController@app',);


Route::post('/upload/game','UploadController@UploadGame');

Route::post('/upload/app','UploadController@UploadApp');

Route::post('/upload/movie','UploadController@UploadMovie');


Route::get('/files','HomeController@show');

Route::get('/errors','HomeController@showerror');

Route::get('/files/{file}','HomeController@display');


