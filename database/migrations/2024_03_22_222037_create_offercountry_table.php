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
        Schema::create('offercountry', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 40);
            $table->string('description', 100);
            $table->string('preview', 200);
            $table->string('image', 200);
            $table->varchar('offers');
            $table->varchar('hotels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offercountry');
    }
};
