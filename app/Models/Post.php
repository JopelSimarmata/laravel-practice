<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [        [
            "id" => 1,
            "title" => "Judul Artikel 1",
            "slug" => "judul-artikel-1",
            "author" => "Jopel Simarmata",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores, nihil! Debitis dolore incidunt iure? Architecto quaerat alias iste quo recusandae praesentium laborum, dolor harum! Veritatis ut repellendus assumenda dolorum reprehenderit!"
        ],
        [
            "id" => 2,
            "title" => "Judul Artikel 2",
            "slug" => "judul-artikel-2",
            "author" => "Jopel Simarmata",
            //buat body nya berbeda dari diatas
            "body" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt."
        ]];
    }

    public static function find($slug){

        return Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
        // return Arr::first(static::all(), function($post) use ($slug){
        //     return $post['slug'] == $slug;
        // });
    }
}