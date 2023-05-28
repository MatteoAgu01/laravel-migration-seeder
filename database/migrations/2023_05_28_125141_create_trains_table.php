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
            $table->bigIncrements('id');
            $table->text('agency')->default(true);
            $table->text('start_station')->default(true);
            $table->text('arrival_station')->default(true);
            $table->time('start_time')->default(true);
            $table->time('arrivals_time')->default(true);
            $table->integer('number_of_carriages')->default(true);
            $table->boolean('cancelled')->default(true);
            $table->boolean('in_time')->default(true);
            $table->time('created_at');
            $table->time('	updated_at');
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
