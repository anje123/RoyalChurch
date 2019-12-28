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

Route::get('/', [
   'uses' => 'FrontendController@index',
   'as' => 'frontend.index'
]);



Auth::routes();

Route::group(['middleware' => 'auth','prefix' => 'admin'], function () {
    Route::get('/home', 'HomeController@index');

    Route::resource('event', 'EventController');

    Route::resource('news', 'NewsController');


    Route::get('/admin/profile/edit/{id}',[
        'uses' => 'ProfileController@edit',
        'as' => 'profile.edit'
    ]);

   Route::post('/admin/profile/update/{id}', [
    'uses' => 'ProfileController@update',
    'as' => 'profile.update'
   ]);

  


});


