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

Route::get('/', 'PageController@index')->name('index');
Route::get('/gallery', 'PageController@gallery')->name('gallery');
Route::get('/services', 'PageController@gallery')->name('gallery');
Route::get('/about', 'PageController@gallery')->name('gallery');
Route::get('/marriage', 'PageController@gallery')->name('gallery');
Route::get('/external', 'PageController@gallery')->name('gallery');
Route::get('/studio', 'PageController@gallery')->name('gallery');
Route::get('/newborn', 'PageController@gallery')->name('gallery');
Route::get('/contact', 'PageController@gallery')->name('gallery');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'Admin\DashboardController@index')->name('admin.index');
Route::get('/admin/events', 'Admin\EventsController@index')->name('admin.events');
Route::get('/admin/category', 'Admin\CategoryController@index')->name('admin.category');
Route::get('/admin/configuration', 'Admin\ConfigurationController@index')->name('admin.configuration');