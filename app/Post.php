<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category()
    {
        //Определение отношений
        // hasOne - один к одному
        return $this->hasOne(Category::class);
    }

    public function comments ()
    {
        return $this->hasMany(Comment::class); //Comment::class эквивалентно 'App\Comment'
    }

    public function addComment ($body)
    {
                // метод create() модели Comment для вставки новой записи в БД
                // Comment::create([
                //     'author' => request('author'),
                //     'body' => request('body'),
                //     'post_id' => $post->id
                // ]);
         $this->comments()->create(compact('body'));
    }
}
