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
        Schema::create('tb_order', function (Blueprint $table) {
            $table->id('order_id');
            $table->unsignedBigInteger('catalogue_id');
            $table->date('wedding_date');
            $table->enum('status', ['requested', 'approved'])->default('requested');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('catalogue_id')->references('catalogue_id')->on('tb_catalogues');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_orders');
    }
};
