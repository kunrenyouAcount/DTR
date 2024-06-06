<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->realText($maxNbChars = 10),
        ];
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
}
