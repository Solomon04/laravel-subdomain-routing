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

Route::domain('{username}.' . env('APP_DOMAIN'))->group(function (){
    Route::get('/', 'ProfileController@show')->name('profile');
});

Auth::routes();

Route::get('/', function (){
    $users = \App\User::all();
    return view('profiles.index')->with('users', $users);
})->name('root');

Route::get('/home', 'HomeController@index')->name('home');

