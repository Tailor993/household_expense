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
        Schema::create('measurments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('measurer_id');
            $table->bigInteger('consumed');
            $table->timestamps();
 
            $table->foreign('measurer_id')->references('id')->on('measurers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('measurments');
    }
};
