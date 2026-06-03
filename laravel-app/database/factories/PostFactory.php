<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title'   => fake()->sentence(6),
            'body'    => fake()->paragraphs(3, true),
            'user_id' => User::factory(),
        ];
    }
}
