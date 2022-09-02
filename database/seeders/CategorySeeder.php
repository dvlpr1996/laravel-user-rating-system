<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
	public function run()
	{
		$categories = [
			'php' => [
				'slug' => 'php',
				'icon' => 'fab fa-php'
			],
			'laravel' => [
				'slug' => 'laravel',
				'icon' => 'fab fa-laravel'
			],
			'ui/ux' => [
				'slug' => 'ui-ux',
				'icon' => 'fas fa-palette'
			],
			'android' => [
				'slug' => 'android',
				'icon' => 'fab fa-android'
			],
			'ios' => [
				'slug' => 'ios',
				'icon' => 'fab fa-apple'
			],
			'web design' => [
				'slug' => 'web-design',
				'icon' => 'fab fa-html5'
			],
			'mysql' => [
				'slug' => 'mysql',
				'icon' => 'fas fa-database'
			]
		];

		foreach ($categories as $categoryName => $details) {
			Category::create([
				'name' => $categoryName,
				'slug' => $details['slug'],
				'icon' => $details['icon']
			]);
		}
	}
}
