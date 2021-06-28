<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'username' => 'johndoe',
            'github_username' => 'driesvints',
            'password' => bcrypt('password'),
            'type' => User::ADMIN,
        ]);

        User::factory()
            ->count(100)
            ->has(Thread::factory()->count(2), 'threadsRelation')
            ->has(
                Article::factory()
                    ->count(2)
                    ->state(
                        new Sequence(
                            ['submitted_at' => now(), 'approved_at' => now()],
                            ['submitted_at' => now()],
                        ),
                    ),
            )
            ->create();
    }
}
