<?php

Route::get('/','HomeController@index')->name('welcome');
Route::post('/reservation','ReservationController@reserve')->name('reservation.reserve');
Route::post('/','ContactController@sendMsg')->name('contact.send');
 

Auth::routes();



Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'], function (){
        Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
        Route::resource('slider','SliderController');
        Route::resource('category','CategoryController');
        Route::resource('item','ItemController');
        Route::get('reservation','ReservationController@index')->name('reservation.index');
        Route::post('reservation/{id}','ReservationController@status')->name('reservation.status');
        Route::delete('reservation/{id}','ReservationController@destroy')->name('reservation.destroy');
        
        Route::get('contact','ContactController@index')->name('contact.index');
        Route::get('contact/{id}','ContactController@show')->name('contact.show');
        Route::delete('contact/{id}','ContactController@destroy')->name('contact.destroy');
});
