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
        Schema::create('countries', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('flag', 200)->nullable();
            $table->string('visa', 5000)->nullable();
            $table->string('description', 2000)->nullable();
            $table->string('capital', 200)->nullable();
            $table->string('currency', 200)->nullable();
            $table->string('time', 200)->nullable();
            $table->string('language', 200)->nullable();
            $table->string('climate', 2000)->nullable();
            $table->string('location', 2000)->nullable();
            $table->integer('attractions')->nullable()->index('attractions');
            $table->string('image', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
};
