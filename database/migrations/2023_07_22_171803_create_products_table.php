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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("mahang");
            $table->string("name");
            $table->string("hinhanh");
            // $table->string("hinhanh_slide1");
            // $table->string("hinhanh_slide2");
            // $table->string("hinhanh_slide3");
            $table->float("price");
            $table->float("old_price");
            $table->bigInteger("brand");
            $table->float("khoiluong");
            $table->text("desription");
            $table->bigInteger("danhmuc");
            $table->integer("tinhtrang_id"); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
