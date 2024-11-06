<?php

use App\Models\TeacherPlan;
use App\Enums\TeacherPayment;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            // ------------------------------------------------- \\ 
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name');
            // ------------------------------------------------- \\ 
            $table->string('teacher_id', 500)->nullable()->unique();
            $table->boolean('active')->default(0);
            // ------------------------------------------------- \\ 
            $table->timestamp('email_verified_at')->nullable();
            // ------------------------------------------------- \\ 
            $table->foreignId('Specialization_id')->nullable()->constrained('specializations');
            $table->foreignId('subject_id')->nullable()->constrained('subjects');
            $table->foreignId('grade_id')->nullable()->constrained('grades');
            $table->foreignId('section_id')->nullable()->constrained('sections');
            $table->foreignId('classroom_id')->nullable()->constrained('classrooms');
            $table->foreignId('admin_package_id')->nullable()->constrained('classrooms');

         
            // ------------------------------------------------- \\ 
            $table->enum('gender', ['male', 'female']);
            $table->integer('status_login')->default(0);
            
            // ------------------------------------------------- \\ 
            $table->date('Joining_Date')->nullable();
            $table->text('Address')->nullable();
            $table->string('timezone')->nullable();
            // ------------------------------------------------- \\ 
            $table->enum('payment_type', TeacherPayment::values())->default(TeacherPayment::PLAN->value);
            $table->unsignedDecimal('percent_amount', 3, 2)->default(0);
            // ------------------------------------------------- \\ 
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
        Schema::dropIfExists('teachers');
    }
}
