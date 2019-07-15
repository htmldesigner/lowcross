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

Route::get('/', function () {return view('home');})->name('index');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::resource('profile', 'ProfileController')->only(['index'])->middleware('auth');

Route::get('/register', function () { return view('auth.register'); });
Route::post('/register', 'Auth\RegisterController@register')->name('register');

Route::get('/contact', function () { return view('contact'); });
Route::post('/contact', 'Auth\RegisterController@registerContact')->name('contact');

Route::get('/practice', function () { return view('practice'); });
Route::post('/practice', 'Auth\RegisterController@registerPractice')->name('practice');

Route::get('/details', function () { return view('details'); });
Route::post('/details', 'Auth\RegisterController@registerDetails')->name('details');

Route::get('/submission', function () { return view('submission'); });
Route::post('/submission', 'Auth\RegisterController@registerSubmission')->name('submission');








