<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\category;
use App\Models\User;
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
            category::create([
            'name' => 'horor',
            'slug' => 'horor-'
        ]);
        category::create([
            'name' => 'action',
            'slug' => 'action-'
        ]);
        category::create([
            'name' => 'ai',
            'slug' => 'ai-'
        ]);
        Blog::factory(200)->recycle(User::factory(20)->create())->create();
    
    }
}
