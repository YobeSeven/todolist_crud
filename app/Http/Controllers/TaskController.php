<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request){
        request()->validate([
            "title" => ["required"],
            "desc" => ["required"],
        ]);

        $data = [
            "title" => $request->title,
            "desc"  => $request->desc,  
            "state" => false,         
        ];

        Task::create($data);
        return redirect()->back();
    }
    
    public function update(Request $request , Task $task){
        request()->validate([
            "title" => ["required"],
            "desc" => ["required"],
        ]);

        $data = [
            "title" => $request->title,
            "desc"  => $request->desc,  
        ];

        $task->update($data);
        return redirect()->back();
    }

    public function done(Task $task){
        $task->state = true;
        $task->save();
        return redirect()->back();
    }

    public function undone(Task $task){
        $task->state = false;
        $task->save();
        return redirect()->back();
    }

    public function destroy(Task $task){
        $task->delete();
        return redirect()->back();
    }
}
