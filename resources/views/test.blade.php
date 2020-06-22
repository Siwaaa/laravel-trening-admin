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
        <div class="card p-3">
            <div class="card-title"><h2>Комментарий</h2></div>
            <form method="POST" action="#">
                <div class="form-group">
                    <textarea class="form-control" name="" id="" placeholder="Введите текст"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Отправить</button>
                </div>
            </form>

        </div>
        <div class="row">
            <ul>
                @foreach ($tasks as $task)
                    <li><a href="/tasks/{{$task->id}}">{{ $task->body }}</a></li>
                @endforeach
            </ul>
        </div>
        <!-- <strong class="text-muted">{{$comment->created_at->diffForHumans()}}</strong> -->
    </div>
</body>
</html>
