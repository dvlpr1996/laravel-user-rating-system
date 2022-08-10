<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Badge>
 */
class BadgeFactory extends Factory
{
	public function definition()
	{
		return [
			'title' => fake()->words(5, true),
			'description' => fake()->sentences(5, true),
			'type' => array_rand([0, 1, 2]),  //'0: xp, 1: topic, 2: answer'
			'required_number' => mt_rand(5, 100),
			'icon_url' => 'fas fa-bars'
		];
	}
}
