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

// public routes
Route::get('/', 'HomeController@index')->name('home'); //public route home
Route::get('/post/{slug}', 'PostController@show')->name('post'); //public route for post single page visualization
Route::get('/contacts', 'HomeController@contacts')->name('contacts'); //public route contact
Route::get('/about', 'HomeController@about')->name('about'); //public route bout us
Route::get('/faq', 'HomeController@faq')->name('faq'); //public route faq

Auth::routes();

// admin routes
Route::middleware('auth') //All routes will be protected by authentication
    ->name('admin.') //All routes will have 'admin' prefix in thier route name
    ->prefix('admin') //All routes will have pefix 'admin' at URL
    ->namespace('Admin') //All routes will belong at 'Admin' namespace
    ->group(function(){ // All outes belongs at this group will have all previuos properties

        Route::get('/', 'HomeController@index')->name('index'); //name->admin.index URL->../admin
        Route::resource('/posts', 'PostController');
});
