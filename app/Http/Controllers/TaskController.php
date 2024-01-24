<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('backend.task.index', ['tasks' => $tasks]);

    }

    public function create()
    {
        return view('backend.task.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'max:100|required',
                'description' => 'required',
                'due_date' => 'date|required',
            ]
        );
        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->due_date = $request->due_date;
        $task->save();

        return redirect('task/list')->with('msg', 'Task has been added successfully');
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function status()
    {

    }
}
