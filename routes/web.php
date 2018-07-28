<?php

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/register', function() {
    $tabs = [
        'datos',
        'validar',
        'codigo',
    ];

    return view('register.index', compact('tabs'));
})->name('register');


Route::any('/dashboard/{section?}', function($section = 'list') {
    return view('dashboard.list');
})->name('dashboard');
