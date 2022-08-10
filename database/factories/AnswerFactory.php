<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Answer>
 */
class AnswerFactory extends Factory
{
	public function definition()
	{
		return [
			'user_id' => User::first() ?? User::factory(),
			'topic_id' => Topic::first() ?? Topic::factory(),
			'status' => mt_rand(0, 1),
			'body' => fake()->sentences(10, true)
		];
	}
}
