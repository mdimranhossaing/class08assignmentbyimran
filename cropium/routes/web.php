<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/home-2', function () {
    return view('home-2');
});

Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/service-details', function () {
    return view('service-details');
});

Route::get('/service', function () {
    return view('service');
});