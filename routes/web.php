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
    return view('mainpages.index');
});
Route::get('/main',function()
{
  return view('mainpages.index');
})->name('main');

Auth::routes();

Route::get('/data','HomeController@add_entry');

Route::resource('customer','CustomerController');
Route::resource('user','UserController');
