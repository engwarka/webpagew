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
        Schema::create('subfatoras', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("tasalsal");
            $table->integer("date_subfatora");
            $table->integer("subwared");
            $table->string("part");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subfatoras');
    }
};
