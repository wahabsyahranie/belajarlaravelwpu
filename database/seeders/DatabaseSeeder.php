<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CategoryPost;
use function Pest\Laravel\call;

use Illuminate\Database\Seeder;
use Database\Seeders\CategoryPostSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // DISATUKAN 
        // Post::factory(10)->recycle([
        //     User::factory(3)->create(),
        //     CategoryPost::factory(2)->create()
        // ])->create();

        // DIPISAH
        $this->call([CategoryPostSeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            CategoryPost::all(),
            User::all()
        ])->create();
    }
}
