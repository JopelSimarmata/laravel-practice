<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Post extends Model //terhubung ke tabel yang namanya posts
{
    protected $fillable = ['title', 'author', 'slug', 'body'];
}