<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User_stats>
 */
class User_StatsFactory extends Factory
{
	public function definition()
	{
		return [
			'user_id' =>  User::first() ?? User::factory(),
			'xp' => mt_rand(0, 100),
			'topic_count' => mt_rand(0, 20),
			'best_count' => mt_rand(0, 10),
			'answer_count' => mt_rand(0, 20)
		];
	}
}
