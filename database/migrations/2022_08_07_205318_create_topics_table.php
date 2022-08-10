<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	public function up()
	{
		Schema::create('topics', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->foreignId('user_id')->constrained()
				->onUpdate('cascade')
				->onDelete('cascade');
			$table->string('title');
			$table->text('body');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('topics');
	}
};
