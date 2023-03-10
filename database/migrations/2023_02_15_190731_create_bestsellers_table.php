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
        Schema::create('bestsellers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('newPrice');
            $table->string('oldPrice');
            $table->string('photo');
            $table->string('offer');
            $table->string('category');
            $table->string('color');
            $table->string('size');
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
        Schema::dropIfExists('bestsellers');
    }
};
