<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index ()

    {
        // $posts = DB::table('posts')->get();
        // это будет идентичный функционал
        // $posts = Post::all();

        // отсортируем посты по дате создания(create_at), начиная с последнего добавленного
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function show (Post $post) //Post::find(windcard)
    {
        // $post = Post::find($id);
        return view('posts.show', compact('post')); //compact() эквивалентно ['post' => $post], просто короче
    }
    public function create()
    {
        return view('posts.create');
    }
}
