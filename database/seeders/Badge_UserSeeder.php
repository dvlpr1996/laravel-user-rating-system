<?php

namespace Database\Seeders;

use App\Models\Badge_User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Badge_UserSeeder extends Seeder
{
	public function run()
	{
		Badge_User::factory()->count(1)->create();
	}
}
