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
        Schema::create('randevu', function (Blueprint $table) {
            $table->id();
            $table->text('ad');
            $table->text('soyad');
            $table->text('telefon');
            $table->text('mail');
            $table->text('saat');
            $table->text('tarih');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('randevu');
    }
};
