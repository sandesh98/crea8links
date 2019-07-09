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

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::get('/diensten' , 'ServiceController@index')->name('service.index');

Route::get('/projecten', 'ProjectController@index')->name('project.index');
Route::get('/projecten/example', 'ProjectController@example')->name('project.example');

Route::post('/', 'NotificationsController@store')->name('notification.store');
