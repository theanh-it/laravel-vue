<?php
use Illuminate\Support\Facades\Route;

Route::get('/admin{any}', 'SpaAdminController@index')->where('any', '.*');
