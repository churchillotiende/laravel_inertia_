<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/welcome', function () {
    return Inertia::render('Welcome',[
        "name" => "OteemediaSolutions",
        "frameworks" => [
            "laravel",
            "vue",
            "inertia",
        ]
    ]);
});
Route::get('/', function (){
    return Inertia::render('Home');
});

Route::get('/users', function (){
    return Inertia::render('Users');
});
Route::get('/settings', function (){
    return Inertia::render('Settings');
});
