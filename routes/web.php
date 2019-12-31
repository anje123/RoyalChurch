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

   
   Route::get('/admin/finance/download', [
    'uses' => 'ProfileController@finance_pdf',
    'as' => 'finance.pdf'
   ]);

   Route::post('/admin/finance/update/{id}',  [
    'uses' => 'ProfileController@finance_update',
    'as' => 'finance.update'
   ]);

   Route::get('/admin/expense/create', [
    'uses' => 'ExpenseController@create',
    'as' => 'expense.create'
   ]);

   Route::get('/admin/expense/index', [
    'uses' => 'ExpenseController@index',
    'as' => 'expense.index'
   ]);


   Route::post('/admin/expense', [
    'uses' => 'ExpenseController@store',
    'as' => 'expense.store'
   ]);

   Route::delete('/admin/expense/delete/{id}', [
    'uses' => 'ExpenseController@destroy',
    'as' => 'expense.delete'
  ]);

    Route::get('/admin/expense/edit/{id}', [
        'uses' => 'ExpenseController@edit',
        'as' => 'expense.edit'
   ]);

   
   Route::post('/admin/expense/update/{id}',  [
    'uses' => 'ExpenseController@update',
    'as' => 'expense.update'
   ]);

   Route::get('/admin/expenses/download', [
    'uses' => 'ExpenseController@expense_pdf',
    'as' => 'expense.pdf'
   ]);
 

});


