<?php

use App\Models\Group;
use App\Models\Student;
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
        Schema::create('group_enroll_students', function (Blueprint $table) {
            $table->id();
            // ------------------------------------------ \\
            $table->foreignId('group_id')->constrained('groups');
            $table->foreignId('student_id')->constrained('students');
            $table->unique(['student_id','group_id']);
            // ------------------------------------------ \\
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_enroll_students');
    }
};
