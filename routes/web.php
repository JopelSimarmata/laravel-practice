<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;




// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about', function () {
    return view('about', ['nama' => 'Jopel Simarmata' ,'title' => 'About Page']);
});

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

Route::get('/posts/{id}', function($id){
    $post = Post::find($id);
    //arr first digunakan untuk mengambil elemen pertama yang sesuai kondisi
    
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});


