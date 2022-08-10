<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic>
 */
class TopicFactory extends Factory
{
	public function definition()
	{
		return [
			'user_id' => User::first() ?? User::factory(),
			'title' => fake()->words(5, true),
			'body' => fake()->sentences(10, true)
		];
	}
}
