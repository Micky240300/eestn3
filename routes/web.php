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
/*
Route::get('/', function () {
    return view('welcome');
});
*/



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('especialidades', function () {
    return view('especialidades');


});

Route::resource('/','WelcomeController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('acercade', function () {
    return view('acercade');

});

Route::get('contacto', function () {
    return view('contacto');

});

Route::resource('products','ProductController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function(){
    return 'sos el admin';
})->middleware(['auth', 'auth.admin']);

Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'auth.admin'])->name('admin.')->group(function(){
    Route::resource('/users', 'UserController', ['except' => ['show', 'create', 'store']]);
});


