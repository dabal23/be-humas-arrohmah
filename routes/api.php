<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/',function(){
    return 'API';
});

Route::apiResource('events', \App\Http\Controllers\Api\EventController::class);