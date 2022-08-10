<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User_Stats;

class User_StatsSeeder extends Seeder
{
	public function run()
	{
		User_Stats::factory()->count(1)->create();
	}
}
