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
        Schema::create('randevu_detay', function (Blueprint $table) {
            $table->id('randevu_detay_id');
            $table->date('randevu_tarih');
            $table->text('tedavi');
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('randevu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('randevu_detay');
    }
};
