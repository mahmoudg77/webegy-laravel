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
Use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/index/{p}',"admin@index");
//Route::get('/{ctrl}/{act}/{p}', function($ctrl,$act,$p){
//	return Controller::call($ctrl.'@'.$act, (array) $p);
//	});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
