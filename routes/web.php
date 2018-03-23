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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',['as'=>'intervention.getresizeimage','uses'=>'ImageController@getResizeImage']);
Route::post('intervention-resizeImage',['as'=>'intervention.postresizeimage','uses'=>'ImageController@postResizeImage']);

Route::get('zipConvert', ['as'=>'intervention.zipconvert','uses'=>'ImageController@zipConvert']);