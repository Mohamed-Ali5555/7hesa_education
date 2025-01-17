<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            // ------------------------------------------------ \\
            $table->string('name')->nullable();
            $table->string('code')->unique();
            // ------------------------------------------------ \\
            $table->enum('type', ['fixed', 'percent'])->default('percent');
            $table->unsignedMediumInteger('amount');
            // ------------------------------------------------ \\
            $table->boolean('active')->default(1);

            $table->date('start_date')->nullable();
            $table->date('date_date')->nullable();
            $table->integer('limit');
            $table->integer('student_limit');
            $table->string('added_by')->nullable();
            $table->string('type_added_by')->nullable();

            // ------------------------------------------------ \\
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
        Schema::dropIfExists('coupons');
    }
};
