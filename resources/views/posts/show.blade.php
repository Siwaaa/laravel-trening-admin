<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container m-5">
        <div class="card">
            <div class="card-header">
                <h1>{{$post->title}}</h1>
            </div>
            <div class="card-body">
                <p>{{$post->body}}</p>
            </div>
            <div class="card-footer text-muted">
                <span>views: {{ $post->views }}</span>
            </div>
        </div>
        <br>
        <!-- Comment -->
        <div class="card p-3">
            <div class="card-title"><h2>Добавить комментарий</h2></div>
            <form method="POST" action="/posts/{{ $post->id }}/comment">
                {{ csrf_field() }}
                <div class="form-group">
                    <input class="form-control" type="text" name="author" placeholder="Имя">
                    <br>
                    <textarea class="form-control" name="body" placeholder="Введите текст"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
            </form>
        </div>
        <br>

        <h2>Комментарии</h2>
        <div class="card p-3">
        @foreach($post->comments->where('is_public', '=', 0) as $comment)
        <div class="card">
            <div class="card-header">
                <h3>{{$comment->author}}</h3>
            </div>
            <div class="card-body">
                <p>{{$comment->body}}</p>

            </div>

        </div>
        <br>
        @endforeach
        </div>
    </div>
</body>
</html>
