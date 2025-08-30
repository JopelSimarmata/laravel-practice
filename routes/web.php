<?php

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
    return view('posts', ['title' => 'Blog Page', 'posts' => [
        [
            "title" => "Judul Artikel 1",
            "author" => "Jopel Simarmata",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores, nihil! Debitis dolore incidunt iure? Architecto quaerat alias iste quo recusandae praesentium laborum, dolor harum! Veritatis ut repellendus assumenda dolorum reprehenderit!"
        ],
        [
            "title" => "Judul Artikel 2",
            "author" => "Jopel Simarmata",
            //buat body nya berbeda dari diatas
            "body" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt."
        ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});



