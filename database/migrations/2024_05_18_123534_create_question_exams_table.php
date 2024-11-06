<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_exams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exam_id')->constrained('quizzes');
            $table->foreignId('question_id')->constrained('questions');
            $table->unique(['question_id','exam_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_exams');
    }
};
