<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class ShowTaskController extends Controller
{

    public function show($taskid)
    {
        $task = Task::find($taskid);
        return view('showtask', [
            'tasks' => $task,
        ]);
    }
    public function delete($task_id)
    {
        $task = Task::find($task_id);
        $task->delete();
        return view('delete',[
            'id' => $task_id
        ]);
    }
}