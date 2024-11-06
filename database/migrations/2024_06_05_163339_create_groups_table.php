<?php

use App\Enums\GroupVisibility;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();

            $table->foreignId('class_id')->constrained('classrooms');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->boolean('status')->nullable();
            $table->enum('visibility', GroupVisibility::values())->default(GroupVisibility::PUBLIC->value);
            $table->softDeletes();
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
        Schema::dropIfExists('groups');
    }
};
