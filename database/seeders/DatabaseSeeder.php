<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\Post::factory(100)->create();
        // \App\Models\Category::factory(5)->create();
        // \App\Models\Resources::factory(20)->create();
        // \App\Models\Course::factory()->count(10)->create();

        // $aboutProfile = \App\Models\AboutProfile::factory()->create();
        // $aboutProfile->images()->createMany(\App\Models\AboutProfileImage::factory()->count(7)->make()->toArray());

         \App\Models\Profitable::factory()->create();
    }
}
