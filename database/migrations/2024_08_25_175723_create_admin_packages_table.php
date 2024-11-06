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
        Schema::create('admin_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->text('description')->nullable();
            // ------------------------ //
            $table->integer('status')->default(1);  // if active or not active for teacher
            // $table->integer('active')->default(0); // not sub for student

            $table->string('added_by')->nullable();
            $table->integer('package_type')->default(1); 
            $table->string('image')->nullable();

            $table->date('start_at');

            $table->date('end_at');


            // $table->unsignedBigInteger('grade_id')->contrained();
            // $table->integer('classroom_id');
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
        Schema::dropIfExists('admin_packages');
    }
};
