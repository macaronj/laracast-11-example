<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Job;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Job::factory()->create(
            [
                'title' => 'Director',
                'salary' => '80000$'
            ],
            [

                'title' => 'Programmer',
                'salary' => '50000$'
            ],
            [
                'title' => 'Designer',
                'salary' => '80000$'

            ]
        );
    }
}
