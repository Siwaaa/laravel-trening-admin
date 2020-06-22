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
        <h2>Новая <s>пицца</s> комментарий</h2>
        <div class="card p-3">
        @foreach($comments->where('is_public', '=', 0) as $comment)
        <form method="POST" action="/comments/{{ $comment->id }}" class="">
        @method('PUT')
        {{ csrf_field() }}
        <div class="card ">
                <div class="card-header">
                    <h3>{{$comment->author}} <span class="badge badge-warning">New</span></h3>
                </div>
                <div class="card-body">
                    <p>{{$comment->body}}</p>
                </div>
            <div class="card-header">
                <button type="submit" name="comment_accept" value="ok" class="btn btn-info m-1">Принять</button>
                <button type="submit" name="comment_accept" value="del" class="btn btn-danger m-1">Удалить</button>
            </div>
        </div>


        </form>
        <br>
        @endforeach
        </div>
    </div>
</body>
</html>
