<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $t = fake()->sentence();
        return [
            'judul' => $t,
            'author_id' => User::factory(),
            'cate_id' => mt_rand(1,3),
            'isi' => fake()->text(),
            'slug' => \Illuminate\Support\Str::slug($t),
        ];
    }
}
