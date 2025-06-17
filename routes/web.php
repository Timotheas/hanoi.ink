<?php
require base_path('Modules/Visitors/Routes/web.php');

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
