<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition()
	{
		return [
			'fname' => fake()->firstName(),
			'lname' => fake()->lastName(),
			'skill' => fake()->jobTitle(),
			'slug' => Str::slug(fake()->firstName() . ' ' . fake()->lastName()),
			'email' => fake()->safeEmail(),
			'password' => fake()->password(6,  10),
			'email_verified_at' => now(),
			'remember_token' => Str::random(10),
		];
	}

	/**
	 * Indicate that the model's email address should be unverified.
	 *
	 * @return static
	 */
	public function unverified()
	{
		return $this->state(function (array $attributes) {
			return [
				'email_verified_at' => null,
			];
		});
	}
}
