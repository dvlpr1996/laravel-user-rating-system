<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Badge;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Badge_UserFactory extends Factory
{
	public function definition()
	{
		return [
			'user_id' => User::first() ?? User::factory(),
			'badge_id' => Badge::first() ?? Badge::factory()
		];
	}
}
