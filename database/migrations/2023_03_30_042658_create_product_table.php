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
        Schema::create('product', function (Blueprint $table) {
            $table->id('p_id');
            $table->string('p_name', 50);
            $table->integer('p_price');
            $table->string('p_company');
            $table->json('p_desc')->nullable();

            $table->boolean('p_status')->default(1);
            $table->integer('p_discount');
            $table->string('p_Warranty');
            $table->string('p_model', 50);
            $table->unsignedBigInteger('cat_id');
            $table->foreign('cat_id')->references('cat_id')->on('category_tbl')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_tbl');
    }
};
