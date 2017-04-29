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


Route::get('/explore', 'LoggedInController@index')->middleware('protected');



Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');

Route::get('/logout', 'LoginController@logout');

Route::post('/signup', 'SignUpController@signup');
Route::get('/signup', 'SignUpController@index');

Route::get('/upload', 'UploadController@index')->middleware('protected');
Route::post('/upload', 'UploadController@upload')->middleware('protected');

Route::get('/profile', 'ProfileController@getFaves')->middleware('protected');
 Route::post('/profile', 'ProfileController@addPhotos')->middleware('protected');
 Route::post('/results', 'ProfileController@addPhotos')->middleware('protected');

 Route::get('/profile/{id}/delete', 'ProfileController@destroy');

Route::get('/explore', 'LoggedInController@index')->middleware('protected');
Route::get('/results', 'GraffitiController@search')->middleware('protected');

Route::get('/details/{id}', 'GraffitiController@details')->middleware('protected');
