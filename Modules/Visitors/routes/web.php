<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Modules\Visitors\Http\Controllers\IndexController@index');
