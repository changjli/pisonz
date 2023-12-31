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
        Schema::create('transactions', function (Blueprint $table) {
            $table->string('id');
            $table->string('user_id');
            $table->string('user_nickname');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('payment_id');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('payment_evidence');
            $table->string('total');
            $table->string('status');
            $table->primary('id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
