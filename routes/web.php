<?php

Auth::routes();

Route::get('/', function() { return redirect('cats'); });
// Route::resource('cats', 'CatController');
Route::get('cats', 'CatController@index') -> name('cats.index');

Route::get('cats/show/{id}', 'CatController@show')
          -> name('cats.show')
          -> middleware('auth');

Route::get('cats/edit/{id}', 'CatController@edit')
          -> name('cats.edit')
          -> middleware('auth');
Route::put('cats/update/{id}', 'CatController@update')
          -> name('cats.update')
          -> middleware('auth');
