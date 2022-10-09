<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/about-2', function () {
    return view('about-2');
});

Route::get('/blog-2', function () {
    return view('blog-2');
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

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/home-2', function () {
    return view('home-2');
});

Route::get('/home-3', function () {
    return view('home-3');
});

Route::get('/home-4', function () {
    return view('home-4');
});

Route::get('/home-5', function () {
    return view('home-5');
});

Route::get('/home-6', function () {
    return view('home-6');
});

Route::get('/home-7', function () {
    return view('home-7');
});

Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/process', function () {
    return view('process');
});

Route::get('/service-details', function () {
    return view('service-details');
});

Route::get('/team', function () {
    return view('team');
});
