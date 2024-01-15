<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $project = Project::create([
            'name' => 'Launch App',
        ]);

        $project->tasks()->create(['description' => 'Build software in the weekend.', 'is_complete' => true]);
        $project->tasks()->create(['description' => 'Tweet about it.']);
        $project->tasks()->create(['description' => 'Make millions.']);
    }
}
