<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task; //для импорта модуля, так как мы с ним работаем


class TasksController extends Controller
{
    public function index()
    {
        // $tasks = DB::table('tasks')->get();
        // это будет идентичный функционал
        $tasks = Task::all();
        return view('test', compact('tasks'));
    }

    public function show(Task $task) //Task::find(windcard)
    {
        // $task = Task::find($id);
        return view('show', compact('task')); //compact() эквивалентно ['task' => $task], просто короче
    }

}
