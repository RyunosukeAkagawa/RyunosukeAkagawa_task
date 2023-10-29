<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task show</title>
</head>
<body>
    <h1>{{ $task->title }}</h1>
    <p>{!! nl2br(e($task->body)) !!}</p>
    <button></button>
    <a href="{{ route('tasks.index') }}">一覧に戻る</a>
</body>
</html>
