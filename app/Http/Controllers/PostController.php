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

    public function create()
    {
        $postsArr = [
            [
                'title' => 'title of post from phpstorm',
                'content' => 'some interesting content',
                'image' => 'autumn.jpg',
                'likes' => '23',
                'is_published' => '1',
            ],
            [
                'title' => 'another title of post from phpstorm',
                'content' => 'another some interesting content',
                'image' => 'another autumn.jpg',
                'likes' => '33',
                'is_published' => '1',
            ]
        ];

        foreach ($postsArr as $item) {
            Post::create($item);
        }
        dd('created');
    }

    public function update()
    {
        $post = Post::find(1);

        $post->update([
            'title' => '1111 updated',
            'content' => '1111 updated',
        ]);
        dd('updated');
    }
}
