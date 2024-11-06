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
        Schema::create('exam_attempts', function (Blueprint $table) {
            $table->id();
            //------------------------------------------------------------ // 
            $table->foreignId('exam_id')->constrained('quizzes');
            $table->foreignId('student_id')->constrained('students');
            //------------------------------------------------------------ // 
            $table->timestamp('started_at')->nullable();
            $table->time('exam_time')->nullable();
            //------------------------------------------------------------ // 
            $table->string('time_spent')->nullable();
            //------------------------------------------------------------ // 
            $table->boolean('status')->default(false);
            $table->timestamp('submitted_at')->nullable();
            //------------------------------------------------------------ // 
            $table->float('marks')->default(0);
            //------------------------------------------------------------ // 
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
        Schema::dropIfExists('exam_attempts');
    }
};
