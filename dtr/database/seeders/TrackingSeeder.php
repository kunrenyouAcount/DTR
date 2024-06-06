<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Tag;
use App\Models\Tracking;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrackingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::with(['tasks'])->get();
        $projects = Project::all();
        $tags = Tag::all();
        $users->each(function ($user) use ($projects, $tags, &$startTime) {
            for ($i=8; $i < 20; $i += 2) { 
                $startTime = now()->startOfDay()->addHours($i);
                Tracking::factory()
                    ->userId($user->id)
                    ->projectId($projects->random()->id)
                    ->taskId($user->tasks->random()->id)
                    ->startTime($startTime)
                    ->endTime($startTime->addHours(2))
                    ->create()
                    ->tags()->attach($tags->random(2)->pluck('id'));
            }
        });
    }
}
