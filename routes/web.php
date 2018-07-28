<?php

Route::get('/', function () {

    return view('welcome');

});


Route::get('/register', function() {
    $tabs = [
        'datos',
        'validar',
        'codigo',
    ];

    return view('register.index', compact('tabs'));
});


Route::any('/dashboard', function() {
    return view('dashboard.index');
});
