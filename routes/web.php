<?php
Route::get('/', function () {
    return view('home');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('profile/show', 'ProfileController@show')->middleware('roles:Moderator,User');
