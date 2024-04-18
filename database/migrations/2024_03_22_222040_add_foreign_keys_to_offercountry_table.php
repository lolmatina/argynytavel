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
        Schema::table('offercountry', function (Blueprint $table) {
            $table->foreign(['offers'], 'offercountry_ibfk_1')->references(['id'])->on('offers')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['hotels'], 'offercountry_ibfk_2')->references(['id'])->on('hotels')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offercountry', function (Blueprint $table) {
            $table->dropForeign('offercountry_ibfk_1');
            $table->dropForeign('offercountry_ibfk_2');
        });
    }
};
