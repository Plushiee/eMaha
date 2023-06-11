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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PageController@home');
Route::get('/profile', 'PageController@profile');
Route::get('/student', 'PageController@student')->name('student.show');
Route::get('/contact', 'PageController@contact');

Route::get('/student/search', 'PageController@search');
Route::get('/student/formadd', 'PageController@formadd');
Route::post('/student/save', 'PageController@save');

Route::get('/student/formedit/{id}', 'PageController@formedit');
Route::put('/student/update/{id}', 'PageController@update');

Route::get('/student/delete/{id}', 'PageController@delete');