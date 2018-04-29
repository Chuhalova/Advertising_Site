<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('profile', 'ProfileController@index')->middleware('roles:Moderator,User');
Route::put('profile','ProfileController@updateAvatar')->middleware('roles:Moderator,User');
Route::get('/categories', function(\Illuminate\Http\Request $request) {
    return response()->json(\App\Category::whereParentId(null)->get());
});

Route::get('/categories/{parent}', function(\Illuminate\Http\Request $request, \App\Category $parent) {
    return response()->json(\App\Category::whereParentId($parent->id)->get());
});

Route::get('advertisements', 'AdvertisementController@index');
Route::get('advertisements/create', 'AdvertisementController@create')->middleware('roles:User');
Route::post('advertisements', 'AdvertisementController@store')->middleware('roles:User');
Route::get('advertisements/{id}/edit', 'AdvertisementController@edit')->middleware('roles:User');
Route::patch('/advertisements/{id}', 'AdvertisementController@update')->middleware('roles:User');
Route::delete('/advimages/{id}', 'AdvertisementController@destroyImage')->middleware('roles:User');
Route::patch('/adv/{id}', 'AdvertisementController@updateOnImg')->middleware('roles:User');
Route::get('/advertisements/{id}','AdvertisementController@show')->middleware('roles:User');