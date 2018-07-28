<?php

Route::get('/', function () {

    return view('welcome');

});


Route::get('/register', function() {
    $tabs = [
        'signup',
        'validation',
        'type',
        'extra',
    ];

    return view('register.index', compact('tabs'));
});


Route::get('/dashboard', function() {
    return view('dashboard.index');
});
