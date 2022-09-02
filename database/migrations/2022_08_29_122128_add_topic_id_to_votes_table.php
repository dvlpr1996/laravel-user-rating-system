<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	public function up()
	{
		Schema::table('votes', function (Blueprint $table) {
			$table->foreignId('topic_id')->constrained('topics')->onUpdate('cascade')
			->onDelete('cascade');
		});
	}

	public function down()
	{
		Schema::table('votes', function (Blueprint $table) {
			$table->dropForeign(['topic_id']);
			$table->dropColumn('topic_id');
		});
	}
};
