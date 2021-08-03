<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function index()
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }
    public function show(Request $request)
    {
        $taskId = $request->input('id');
        $task = Task::find($taskId);
        return compact('task');

    }
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|min:3',
            'text' => 'required|min:3',
        ];
        $this->validate($request, $rules);

        $task = Task::create([
            'user_id' => auth('api')->user()->id,
        ] + $request->all());

        if($task){
            $success = true;
        }else{
            $success = false;
        }
        return compact('success');
    }

    public function update(Request $request)
    {
        $taskId = $request->input('id');
        $task = Task::find($taskId);
        $task->title = $request->input('title');
        $task->text = $request->input('text');
        $task->user_id = auth('api')->user()->id;
        $task->save();

        if($task){
            $success = true;
        }else{
            $success = false;
        }
        return compact('success');
    }
    public function delete(Request $request)
    {
        $taskId = $request->input('id');
        $task = Task::find($taskId);
        $task->delete();
        if($task){
            $success = true;
        }else{
            $success = false;
        }
        return compact('success');
    }
}
