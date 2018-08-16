<?php


Route::get('contact', function(){
	return view('contactform::contact');
});

Route::post('contact', function(){
	
})->name('contact');