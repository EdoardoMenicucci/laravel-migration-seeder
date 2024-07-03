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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();


            $table->string('company');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->decimal('departure_time');
            $table->decimal('arrival_time');
            $table->bigInteger('train_code');
            $table->integer('number_of_carriages');
            $table->boolean('on_time');
            $table->boolean('cancelled');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
