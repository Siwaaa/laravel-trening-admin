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
        <h1>Статьи</h1>
        @foreach($posts as $post)
        <div class="card m-2">
            <div class="card-body">
                <div class="card-title"><h2>{{ $post->title }}</h2></div>
                <p class="card-text">{{ $post->body }}</p>
            </div>
            <div class="card-footer text-muted d-flex justify-content-between">
                <a href="/posts/{{ $post->id }}" class="btn btn-primary">Перейти</a>
                <span>views: {{ $post->views }}</span>
            </div>
        </div>
        @endforeach
    </div>

</body>
</html>
