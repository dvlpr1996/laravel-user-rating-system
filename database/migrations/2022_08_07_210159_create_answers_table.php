<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

	public function up()
	{
		Schema::create('answers', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->foreignId('user_id')->constrained()
				->onUpdate('cascade')
				->onDelete('cascade');
			$table->foreignId('topic_id')->constrained()
				->onUpdate('cascade')
				->onDelete('cascade');
			$table->text('body');
			$table->tinyInteger('status')->comment('0: normal, 1: best')->default(0);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('answers');
	}

};
