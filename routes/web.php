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
    return view('welcome');
});


// Route::get('/adam', function () {
//     return view ('aseel');
// });


Route::get('/students', 'studentController@index');

Route::get('/hamzeh', 'maryaController@index1');

Route::get('/home', 'pageController@home');
Route::get('/about ', 'pageController@about_us');
Route::get('/contact', 'pageController@contact_us');
Route::get('/services', 'pageController@services');
