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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'guest'], function(){

    //register
    Route::livewire('/register', 'auth.register')
    ->layout('layouts.app')->name('register');

    //login
    Route::livewire('/login', 'auth.login')
    ->layout('layouts.app2')->name('login');

});

Route::group(['middleware' => 'auth'], function(){

    //dashboard
    Route::livewire('/admin/dashboard', 'admin.dashboard')
    ->layout('layouts.app')->name('admin.dashboard');

    Route::livewire('/index', 'post.index')->name('post.index');
    Route::livewire('/create', 'post.create')->name('post.create');
    Route::livewire('/edit/{id}', 'post.edit')->name('post.edit');

});

