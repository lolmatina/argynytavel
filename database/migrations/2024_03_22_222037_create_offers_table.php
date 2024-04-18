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
        Schema::create('offers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 200);
            $table->string('info', 800) -> nullable();
            $table->json('description') -> nullable();
            $table->json('additionalInfo') -> nullable();
            $table->date('bookingStart') -> nullable();
            $table->date('bookingEnd') -> nullable();
            $table->date('livingStart') -> nullable();
            $table->date('livingEnd') -> nullable();
            $table->foreignId('id')->references('id')->on('offerCountry')->onDelete('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
};
