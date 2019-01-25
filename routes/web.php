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

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/', 'HomeController@index')->name('home');


//Auth::routes();

Route::middleware(['auth', 'roles'])->prefix('admin')->group(function(){
    Route::get('/', [
        'uses'  => 'Admin\HomeController@index',
        'roles' => ['administrator', 'user']
    ])->name('admin.home');

    Route::get('users', [
        'uses'  => 'admin\UserController@index',
        'roles' => ['administrator']
    ])->name('users.index');

    Route::get('users/create', [
        'uses'  => 'Admin\UserController@create',
        'roles' => ['administrator']
    ])->name('users.create');

    Route::post('users/store', [
        'uses'  => 'Admin\UserController@store',
        'roles' => ['administrator']
    ])->name('users.store');
});
