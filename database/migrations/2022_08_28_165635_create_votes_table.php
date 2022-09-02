<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	public function up()
	{
		Schema::create('votes', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->foreignId('answer_id')->constrained('answers')->onUpdate('cascade')
			->onDelete('cascade');
			$table->tinyInteger('vote')->default(0);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('votes');
	}
};
