<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        // $post = Post::first();
        // $posts = Post::find(25);
        // $posts = Post::get();

        //Paginacion
        $posts = Post::paginate();
        return view('blog', ['posts' => $posts]);
    }

    public function post(Post $post)
    {
        // $post = $slug;
        return  view('post', ['post' => $post]);
    }
}
