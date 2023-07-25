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
        Schema::create('tasdeds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("madentasded");
            $table->integer("datetasded");
            $table->integer("texttasded");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasdeds');
    }
};
