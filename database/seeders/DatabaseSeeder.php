<?php
namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Factories\CategoryFactory;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $userCount = 10; // Number of random users to create

        User::factory()->count($userCount)->create()->each(function ($user) {
            Task::factory()->count(rand(5, 10))->create(['user_id' => $user->id]);
        });
    }
}
