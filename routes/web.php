<?php

use Illuminate\Support\Facades\Route;


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

//Route::get('/','WelcomeController@home');

Route::get('/', 'PagesController@home' );
   
Route::get('/about','PagesController@about');

Route::get('/services/{name}','PagesController@services');

/*Route::get('/services/{name}',function($name){
    return view('pages.services');
});*/

Route::get('/show/{id}','Pagescontroller@show');