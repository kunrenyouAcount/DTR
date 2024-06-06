<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// 認証後のみアクセス可能
Route::middleware('auth:sanctum')->group(function () {
    // タスク
    Route::prefix('task')->group(function () {
        // タスク一覧
        Route::get('/', [TaskController::class, 'index']);
        // タスク登録
        Route::post('/', [TaskController::class, 'store']);
        // タスク詳細
        Route::get('/{id}', [TaskController::class, 'show']);
        // タスク更新
        Route::put('/{id}', [TaskController::class, 'update']);
        // タスク削除
        Route::delete('/{id}', [TaskController::class, 'destroy']);
    });
});