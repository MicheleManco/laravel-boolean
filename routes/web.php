<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'GuestController@home') -> name('home');
