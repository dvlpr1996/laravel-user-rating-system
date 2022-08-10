<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	public function run()
	{
		$this->call([
			userSeeder::class,
			BadgeSeeder::class,
			TopicSeeder::class,
			AnswerSeeder::class,
			User_StatsSeeder::class,
			Badge_UserSeeder::class,
		]);
	}
}
