<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('likes', 100)->get();
        foreach ($posts as $post) {
            dump($post->title);
        }
        dd('end');
    }
}
