<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orderdesc', function (Blueprint $table) {
            $table->id('ord_id');
            $table->unsignedBigInteger('u_id');
            $table->foreign('u_id')->references('id')->on('users');
            $table->unsignedBigInteger('od_id');
            $table->foreign('od_id')->references('od_id')->on('order');
            $table->unsignedBigInteger('p_id');
            $table->foreign('p_id')->references('p_id')->on('product');
            $table->integer('price');
            $table->integer('quantity');
            $table->integer('t_price');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderdesc');
    }
};
