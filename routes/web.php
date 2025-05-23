<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('introduction');
});

Route::get('/logo', function () {
    return view('logo');
});

Route::get('/colors', function () {
    return view('colors');
});

Route::get('/typography', function () {
    return view('typography');
});

Route::get('/icons', function () {
    return view('icons');
});

Route::get('/img', function () {
    return view('images');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/layout-example', function () {
    return view('layout-example');
});

Route::get('/grid', function () {
    return view('grid');
});

Route::get('/new-page', function () {
    return view('new-page');
});

Route::get('/links', function () {
    return view('links');
});

Route::get('/messages', function () {
    return view('messages');
});

Route::get('/help-functions', function () {
    return view('help-functions');
});

Route::get('/filters', function () {
    return view('filters');
});

Route::get('/slide-ins', function () {
    return view('slide-ins');
});

Route::get('/cards', function () {
    return view('cards');
});

Route::get('/lists', function () {
    return view('lists');
});

Route::get('/forms', function () {
    return view('forms');
});

Route::get('/buttons', function () {
    return view('buttons');
});

Route::get('/pagination', function () {
    return view('pagination');
});

Route::get('/app', function () {
    return view('app');
});
