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
        <h1>Админ панель</h1>
        <div class="card">
            <div class="card-header">Управление постами</div>
            <div class="card-body">
                <p>Всего постов: {{ $post->count() }}</p>
                <a href="/posts" class="btn btn-primary">Перейти к ним ко всем</a>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">Модерация комментариев</div>
            <div class="card-body">
                <p>Необработанных комментариев: {{ $comment->where('is_public', '=', 0)->count() }}</p>
                <a href="/comments" class="btn btn-primary">Перейти</a>
            </div>
        </div>
    </div>
</body>
</html>
