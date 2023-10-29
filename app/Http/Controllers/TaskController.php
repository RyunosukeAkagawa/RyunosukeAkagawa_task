<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // indexページへ移動
    public function index()
    {
        // モデル名::テーブル全件取得
        $memos = Task::all();
        // memosディレクトリーの中のindexページを指定し、memosの連想配列を代入
        return view('tasks.index', ['tasks' => $memos]);
    }


    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show', ['task' => $task]);
    }

    public function store(Request $request)
    {
        // インスタンスの作成
       $task = new Task;

       // 値の用意
       $task->title = $request->title;
       $task->body = $request->body;

       // インスタンスに値を設定して保存
       $task->save();

       // 登録したらindexに戻る
       return redirect(route("tasks.index"));
    }
}
