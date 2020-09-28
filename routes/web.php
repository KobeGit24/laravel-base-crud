<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagantiController@index') -> name('paganti.index');

Route::get('/delete/{id}', 'PagantiController@destroy') -> name('paganti.destroy');

Route::get('/edit/{id}', 'PagantiController@edit') -> name('paganti.edit');

Route::post('/update/{id}', 'PagantiController@update') -> name('paganti.update');
