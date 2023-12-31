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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("fullname")->nullable();
            $table->string("address")->nullable();
            $table->string("sdt")->nullable();
            $table->string("nametour")->nullable();
            $table->float("price");
            $table->float("total_money");
            $table->string("status")->nullable();
            $table->integer('quantity');
            $table->unsignedBigInteger("cart_id");
            $table->unsignedBigInteger('user_id');
            $table->foreign('cart_id')->references('id')->on('carts')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
