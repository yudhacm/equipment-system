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
        Schema::create('equipment_status', function (Blueprint $table) {

            $table->id('id_equipment_status');

            $table->unsignedBigInteger('id_equipment');
            $table->unsignedBigInteger('id_data_status');

            $table->year('year');

            $table->foreign('id_equipment')
                ->references('id_equipment')
                ->on('equipment')
                ->onDelete('cascade');

            $table->foreign('id_data_status')
                ->references('id_data_status')
                ->on('status_data');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment_status');
    }
};
