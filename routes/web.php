<?php

Route::get('/', function () {


    $tabs = [
        'signup',
        'type',
        'extra',
    ];

    return view('wizard.index', compact('tabs'));
});
