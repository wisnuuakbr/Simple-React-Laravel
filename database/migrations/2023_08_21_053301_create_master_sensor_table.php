<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('master_sensor', function (Blueprint $table) {
            $table->id();
            $table->string('sensor');
            $table->string('sensor_name');
            $table->string('unit');
            $table->string('created_by');
            $table->dateTime('created_at');
            $table->softDeletes()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_sensor');
    }
};
