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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id('id_equipment');

            $table->unsignedBigInteger('id_category');
            $table->unsignedBigInteger('id_location');
            $table->unsignedBigInteger('id_frequency');

            $table->string('capacity')->nullable();

            $table->foreign('id_category')
                ->references('id_category')
                ->on('categories');

            $table->foreign('id_location')
                ->references('id_location')
                ->on('locations');

            $table->foreign('id_frequency')
                ->references('id_frequency')
                ->on('frequencies');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
