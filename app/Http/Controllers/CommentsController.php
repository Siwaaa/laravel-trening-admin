<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{

    public function store(Post $post)
    {
        // $post->addComment(request('author', 'body'));
                        //метод create() модели Comment для вставки новой записи в БД
                Comment::create([
                    'author' => request('author'),
                    'body' => request('body'),
                    'post_id' => $post->id
                ]);
        return back();
    }

    public function index()
    {
        $comments = Comment::latest()->get();
        return view('comment.index', compact('comments'));
    }

    public function update(Request $request, $id)
    {
        // dd(request()->all());
        $comment = Comment::find($id);

        switch(request('comment_accept')) {
            case 'ok': // нажата кнопка Block
                $comment->is_public = 1;
                $comment->save();
            break;
            case 'del': // нажата кнопка Unlock
                $comment->delete();
            break;
        }

        return back();
    }
}
