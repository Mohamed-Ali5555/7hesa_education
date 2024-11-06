<?php

use App\Models\{Group,Day};
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
        Schema::create('group_days', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->constrained('groups');
            $table->foreignId('day_id')->constrained('days');
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
        Schema::dropIfExists('group_days');
    }
};
