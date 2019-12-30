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

   Route::get('/admin/finance/create', [
    'uses' => 'ProfileController@finance',
    'as' => 'finance.create'
   ]);
  
   Route::post('/admin/finance', [
    'uses' => 'ProfileController@finance_save',
    'as' => 'finance.save'
   ]);

   Route::get('/admin/finances', [
    'uses' => 'ProfileController@get_finance',
    'as' => 'finance'
   ]);
   
   Route::delete('/admin/finance/delete/{id}', [
       'uses' => 'ProfileController@finance_delete',
       'as' => 'finance.delete'
   ]);


   Route::get('/admin/finance/edit/{id}', [
    'uses' => 'ProfileController@finance_edit',
    'as' => 'finance.edit'
   ]);

   Route::post('/admin/finance/update/{id}',  [
    'uses' => 'ProfileController@finance_update',
    'as' => 'finance.update'
   ]);


});


