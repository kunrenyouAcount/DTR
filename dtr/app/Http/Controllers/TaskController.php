<?php

namespace App\Http\Controllers;

use App\Http\Resources\TaskIndexResource;
use App\Http\Resources\TaskShowResource;
use App\Http\Resources\TaskStoreResource;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $tasks = Task::where('user_id', $user->id)->get();
        return TaskIndexResource::collection($tasks);
    }

    public function store(Request $request)
    {
        $task = Task::create([
            'name' => $request->input('name'),
            'user_id' => $request->user()->id,
        ]);
        return TaskStoreResource::make($task);
    }

    public function show($id)
    {
        $task = Task::findOrFail($id);
        return TaskShowResource::make($task);
    }

    public function update(Request $request, $id)
    {
        return response()->json([
            'message' => 'タスク更新'
        ]);
    }

    public function destroy($id)
    {
        return response()->json([
            'message' => 'タスク削除'
        ]);
    }
}
