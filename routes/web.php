<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "MAin Page";
});


Route::get("/hello", function(){
    $num1 = 20;
    $num2 = 30;
    $result = $num1 + $num2;

    return "Hello from another page and the result is ". $result .".";
})->name("hello");

Route::get("/greet/{name}", function($name){
    return "Hello " . $name . " !";
});

Route::get("/nope", function(){
    return redirect()->route('hello');
});

// if all the route is not exist then show this message
Route::fallback(function(){
    return "404 Not Found";
});