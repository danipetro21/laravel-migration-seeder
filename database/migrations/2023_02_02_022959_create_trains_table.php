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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('train_name');
            $table->integer('train_code')->unique();
            $table->string('train_type');
            $table->string('origin');
            $table->string('destination');
            $table->date('time_of_departure');
            $table->integer('duration_trip');
            $table->integer('ticket_price');
            $table->integer('wagon number');



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
        Schema::dropIfExists('trains');
    }
};
