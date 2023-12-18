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
        Schema::create('bestellingen_transactie', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->nullable(false)->references('id')->on('bestellingen')->cascadeOnDelete();
            $table->foreignId('user_id')->nullable(false)->references('id')->on('users')->cascadeOnDelete();
            $table->foreignId('to_status_id')->nullable(false)->references('id')->on('status')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bestellingen_transactie__tabel');
    }
};
