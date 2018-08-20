<?php

Route::group(['namespace' => 'Paulayuk\Contactform\Http\Controllers'], function(){
	
	Route::get('contact', 'ContactFormController@index');

    Route::post('contact', 'ContactFormController@sendMail')->name('mail');

});

