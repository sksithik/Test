<?php

use Illuminate\Support\Facades\Route;

Route::get('/coding_studio', function () {
    return view('coding_studio');
});

Route::get('/chart_center', function () {
    return view('chart_center');
});