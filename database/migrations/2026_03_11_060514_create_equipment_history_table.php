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
        Schema::create('equipment_history', function (Blueprint $table) {

            $table->id('id_history');

            $table->unsignedBigInteger('id_equipment');

            $table->unsignedBigInteger('before_location');
            $table->unsignedBigInteger('after_location');

            $table->date('history_date');

            $table->string('file_upload')->nullable();

            $table->text('description')->nullable();

            $table->foreign('id_equipment')
                ->references('id_equipment')
                ->on('equipment');

            $table->foreign('before_location')
                ->references('id_location')
                ->on('locations');

            $table->foreign('after_location')
                ->references('id_location')
                ->on('locations');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment_history');
    }
};
