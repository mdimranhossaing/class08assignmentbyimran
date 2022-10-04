<?php 

Route::get('/', function(){
    return view('homepage');
});


Route::get('/about', function(){
    return view('about');
});
?>