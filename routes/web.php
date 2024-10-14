<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Welcome to the homepage";
});

Route::get('/posts', function () {
    return "Aquí se mesutran los posts";
});

Route::get('/posts/{post}', function ($post) {
    return "Aquí se muestra el post {$post}"; 
});

/*Route::get('/posts/{post}/{category?}', function ($post, $category = null) {
    if ($category) {
        return "Aquí se muestra el post {$post} de la categoria {$category}";  
    }

    return "Aquí se muestra el post {$post}"; 
});*/

/*Route::get('/posts/{post}/{category}', function ($post, $category) {
    return "Aquí se muestra el post {$post} de la categoria {$category}"; 
});*/

Route::get('/posts/create', function(){

});