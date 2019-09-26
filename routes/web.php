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

Route::get('/', 'HomeController')->name('home.index');
Route::get('/contact', 'ContactController')->name('contact.index');
Route::get('/diensten' , 'ServiceController')->name('service.index');

Route::get('/projecten', 'ProjectController')->name('project.index');
Route::get('/projecten/example', 'ProjectController@example')->name('project.example');

Route::post('/', 'NotificationsController@store')->name('notification.store');


Route::get('/influencer', 'Influencer\HomeController')->name('influencer.index');

Route::get('/demo', function () {
    $notification = \App\Notification::first();
    return new App\Mail\AppointmentReceived($notification);
});
