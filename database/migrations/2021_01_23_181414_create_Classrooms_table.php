<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassroomsTable extends Migration {

	public function up()
	{
		Schema::create('classrooms', function(Blueprint $table) {
			$table->id();
			$table->string('Name_Class');
			$table->foreignId('grade_id')->constrained('grades')->cascadeOnDelete();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('classrooms');
	}
}
