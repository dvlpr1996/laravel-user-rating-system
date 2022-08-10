<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	public function up()
	{
		Schema::create('badge_user', function (Blueprint $table) {
			$table->foreignId('user_id')->constrained()
				->onUpdate('cascade')
				->onDelete('cascade');
			$table->foreignId('badge_id')->constrained()
				->onUpdate('cascade')
				->onDelete('cascade');
			$table->primary(['user_id', 'badge_id']);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('badge_user');
	}
};
