<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionsTable extends Migration
{

    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->string('academic_year');
            $table->string('academic_year_new');
            $table->foreignId('student_id')->constrained('students')->cascadeOnDelete();
            $table->foreignId('from_grade')->constrained('grades')->cascadeOnDelete();
            $table->foreignId('from_Classroom')->constrained('classrooms')->cascadeOnDelete();
            $table->foreignId('from_section')->constrained('sections')->cascadeOnDelete();
            $table->foreignId('to_grade')->constrained('grades')->cascadeOnDelete();
            $table->foreignId('to_Classroom')->constrained('classrooms')->cascadeOnDelete();
            $table->foreignId('to_section')->constrained('sections')->cascadeOnDelete();
            $table->timestamps();
        });

    }


    public function down()
    {
        Schema::dropIfExists('promotions');
    }
}
