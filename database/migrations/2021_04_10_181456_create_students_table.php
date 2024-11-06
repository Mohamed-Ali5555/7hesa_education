<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{

    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            // ------------------------------------------------- \\ 
            $table->text('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('gender', ['male', 'female']);
            // ------------------------------------------------- \\ 
            $table->date('Date_Birth')->nullable();
            $table->string('academic_year')->nullable();
            $table->integer('active')->default(0);
            $table->string('student_id', 50)->nullable()->unique(); // Adjusted length
            
            $table->integer('status_login')->default(0);

            // ------------------------------------------------- \\ 
            $table->foreignId('grade_id')->nullable()->constrained('grades')->nullOnDelete();
            $table->foreignId('classroom_id')->nullable()->constrained('classrooms')->nullOnDelete();
            $table->foreignId('section_id')->nullable()->constrained('sections')->nullOnDelete();
            // $table->foreignId('teacher_id')->nullable()->constrained('teachers');
            // ------------------------------------------------- \\ 
            $table->string('timezone')->nullable();
            // ------------------------------------------------- \\ 
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
