<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','TodoControllel\PagestodoController@index')->name("home.index");


Route::prefix('Pages')->namespace('TodoControllel')->name('todo.')->group(function()
{ 
  Route::get('profile','PagestodoController@profile')->name("profile.profile");
  Route::post('update','PagestodoController@updateprofile')->name("profile.updateprofile");
  Route::get('show','PagestodoController@showtodo')->name("show.showtodo");
});


Route::prefix('todo')->namespace('TodoControllel')->name('todo.')->group(function()
{
  Route::get('add','PagestodoController@addtodolist')->name('todo.addtodolist');
  Route::get('{todo}/approved','PagestodoController@approved')->name('todo.approved');
  Route::get('approved','PagestodoController@completeAll')->name('todo.completeall');

  Route::get('{todo}/delete','PagestodoController@delete')->name('todo.delete');
  Route::get('allaction','PagestodoController@allaction')->name('todo.allaction');
  Route::post('createtodolist','PagestodoController@createtodolist')->name('todo.createtodolist');
});

Auth::routes();
