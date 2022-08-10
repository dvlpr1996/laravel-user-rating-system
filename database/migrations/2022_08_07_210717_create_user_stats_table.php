<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	public function up()
	{
		Schema::create('user_stats', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->foreignId('user_id')->constrained()
				->onUpdate('cascade')
				->onDelete('cascade');
			$table->integer('xp')->default(0);
			$table->integer('best_count')->default(0);
			$table->integer('topic_count')->default(0);
			$table->integer('answer_count')->default(0);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('user_stats');
	}
};
