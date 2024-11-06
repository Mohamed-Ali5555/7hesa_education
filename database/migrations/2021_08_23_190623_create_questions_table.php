<?php

// use App\Enums\QuestionLevel;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            // --------------------------------------------------------- //
            $table->string('title', 500);
            $table->text('description')->nullable();
            $table->enum('level', ['easy','medium','hard'])->default('easy');
            // --------------------------------------------------------- //
            $table->foreignId('subject_id')->references('id')->on('subjects')->cascadeOnDelete();
            $table->foreignId('grade_id')->references('id')->on('grades')->cascadeOnDelete();
            $table->foreignId('teacher_id')->references('id')->on('teachers')->cascadeOnDelete();

            // $table->foreignId('quizze_id')->references('id')->on('quizzes')->onDelete('cascade');
            // --------------------------------------------------------- //
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
