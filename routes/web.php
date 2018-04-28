<?php
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