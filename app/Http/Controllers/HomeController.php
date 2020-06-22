<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class HomeController extends Controller
{
    public function index()
    {
        $post = Post::all();
        $comment = Comment::all();
        return view('home', compact('post', 'comment'));
    }
}
