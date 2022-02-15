<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'GuestController@home') -> name('home');

Route::get('/api/postcards/list', 'ApiController@getPostcards') -> name('api.postcards.list');
