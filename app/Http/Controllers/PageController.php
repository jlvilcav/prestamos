<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        $posts = [
            ['id' => '1', 'title' => 'PHP', 'slug' => 'PHP'],
            ['id' => '2', 'title' => 'Laravel', 'slug' => 'Laravel'],
            ['id' => '3', 'title' => 'Post 3', 'slug' => 'Content 3'],
            ['id' => '4', 'title' => 'Post 4', 'slug' => 'Content 4'],
            ['id' => '5', 'title' => 'Post 5', 'slug' => 'Content 5']
        ];
        return view('blog', ['posts' => $posts]);
    }

    public function post($slug)
    {
        $post = $slug;
        return  view('post', ['post' => $post]);
    }
}
