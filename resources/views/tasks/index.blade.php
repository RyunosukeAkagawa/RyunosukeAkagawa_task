<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task index</title>
</head>

<body>
@csrf
    <h1>タスク一覧</h1>

    @foreach ($tasks as $task)
        <!-- // リンク先をidで取得し名前で出力 -->
        <p><a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a></p>
    @endforeach
    <hr>
    <h1>新規論文投稿</h1>
    <form action="{{ route('tasks.store') }}" method="post">
        <p>
            <label for="title">論文タイトル</label><br>
            <input type="text" name="title" id="title">
        </p>
        <p>
            <label for="body">内容</label><br>
            <textarea name="body" class="body" id="body"></textarea>
        </p>

        <input type="submit" value="Creat Task">
    </form>
</body>

</html>
