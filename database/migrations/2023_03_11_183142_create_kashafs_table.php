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
        Schema::create('kashafs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("ktasalsal");
            $table->integer("kdate_fatora");
            $table->integer("ktasded");
            $table->string("kpart");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kashafs');
    }
};
