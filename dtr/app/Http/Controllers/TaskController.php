<?php

namespace App\Http\Controllers;

use App\Http\Resources\TaskIndexResource;
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
        return response()->json([
            'message' => 'タスク登録'
        ]);
    }

    public function show($id)
    {
        return response()->json([
            'message' => 'タスク詳細'
        ]);
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
