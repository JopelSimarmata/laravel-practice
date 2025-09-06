<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

Route::get('/posts/{post:slug}', function(Post $post){
   
    //arr first digunakan untuk mengambil elemen pertama yang sesuai kondisi
    
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user}', function(User $user){
   
    //arr first digunakan untuk mengambil elemen pertama yang sesuai kondisi
    
    return view('posts', ['title' => 'Articles by '.$user->name, 'posts' => $user->posts]);
});

Route::get('/category/{category}', function(Category $category){
   
    //arr first digunakan untuk mengambil elemen pertama yang sesuai kondisi
    
    return view('posts', ['title' => 'Category : '.$category->category, 'posts' => $category->posts]);
});





