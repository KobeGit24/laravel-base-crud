<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagantiController@index') -> name('paganti.index');

Route::get('/delete/{id}', 'PagantiController@destroy') -> name('paganti.destroy');
