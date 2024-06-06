<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tracking>
 */
class TrackingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [];
    }

    /**
     * 開始時間を指定
     *
     * @param string $startTime
     * @return $this
     */
    public function startTime(string $startTime): self
    {
        return $this->state(fn() => [
            'start_time' => $startTime,
        ]);
    }

    /**
     * 終了時間を指定
     *
     * @param string $endTime
     * @return $this
     */
    public function endTime(string $endTime): self
    {
        return $this->state(fn() => [
            'end_time' => $endTime,
        ]);
    }

    /**
     * ユーザーIDを指定
     *
     * @param int $userId
     * @return $this
     */
    public function userId(int $userId): self
    {
        return $this->state(fn() => [
            'user_id' => $userId,
        ]);
    }

    /**
     * タスクIDを指定
     *
     * @param int $taskId
     * @return $this
     */
    public function taskId(int $taskId): self
    {
        return $this->state(fn() => [
            'task_id' => $taskId,
        ]);
    }

    /**
     * プロジェクトIDを指定
     *
     * @param int $projectId
     * @return $this
     */
    public function projectId(int $projectId): self
    {
        return $this->state(fn() => [
            'project_id' => $projectId,
        ]);
    }
}
