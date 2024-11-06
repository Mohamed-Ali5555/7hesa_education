<?php

use App\Models\GroupDay;
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
        Schema::create('group_day_times', function (Blueprint $table) {
            $table->id();
            // ---------------------------------- //
            $table->foreignId('group_day_id')->constrained('group_days');
            // ---------------------------------- //
            $table->time('start_time');
            $table->time('end_time');
            // ---------------------------------- //
            $table->unique(['start_time', 'end_time', 'group_day_id']);
            // ---------------------------------- //
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
        Schema::dropIfExists('group_day_times');
    }
};
