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
        Schema::create('teacher_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->text('description')->nullable();
            // ------------------------ //
            $table->integer('status')->default(1);  // if active or not active for teacher
            $table->integer('active')->default(0); // not sub for student

            $table->string('added_by')->nullable();
            $table->integer('package_type')->default(1); 
            $table->string('image')->nullable();

            $table->date('start_at');

            $table->date('end_at');


            $table->unsignedBigInteger('grade_id')->contrained();
            $table->integer('classroom_id');

    
            // Schema::create('plan_subscriptions', function (Blueprint $table) {
            //     $table->increments('id');
            //     $table->integer('plan_id');
    
            //     $table->integer('model_id');
            //     $table->string('model_type');
    
            //     $table->string('payment_method')->nullable()->default(null);
            //     $table->boolean('is_paid')->default(false);
    
            //     $table->float('charging_price', 8, 2)->nullable();
            //     $table->string('charging_currency')->nullable();
    
            //     $table->boolean('is_recurring')->default(true);
            //     $table->integer('recurring_each_days')->default(30);
    
            //     $table->timestamp('starts_on')->nullable();
            //     $table->timestamp('expires_on')->nullable();
            //     $table->timestamp('cancelled_on')->nullable();
    
            //     $table->timestamps();
            // });
    
            // Schema::create('plan_subscription_usages', function (Blueprint $table) {
            //     $table->increments('id');
            //     $table->integer('subscription_id');
    
            //     $table->string('code');
            //     $table->float('used', 9, 2)->default(0);
    
            //     $table->timestamps();
            // });







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
        Schema::dropIfExists('teacher_packages');
    }
};
