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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            // --------------------------------------------------------- \\
            $table->string('name');
            $table->string('icon_code')->nullable();
            $table->string('color_name')->default('primary');
            // --------------------------------------------------------- \\
            $table->foreignId('grade_id')->constrained('grades')->cascadeOnDelete();
            $table->foreignId('classroom_id')->constrained('classrooms')->cascadeOnDelete();
            // $table->foreignId('teacher_id')->constrained('teachers')->cascadeOnDelete();
            $table->foreignId('section_id')->constrained('sections')->cascadeOnDelete();
            // --------------------------------------------------------- \\
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
        Schema::dropIfExists('subjects');
    }
};
