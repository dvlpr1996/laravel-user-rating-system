<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	public function up()
	{
		Schema::create('badges', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('title');
			$table->text('description');
			$table->tinyInteger('type')->comment('0: xp, 1: topic, 2: answer')->default(0);
			$table->integer('required_number');
			$table->string('icon_url', 2083);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('badges');
	}
};
