<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('investor_snapshots', function (Blueprint $table) {
            $table->id();
            $table->string('symbol')->default('PSX: BEAU');
            $table->string('price')->default('152.00');
            $table->string('change_text')->default('+4.25 (+2.88%)');
            $table->string('market_cap')->default('$1.24 Billion');
            $table->string('range_52w')->default('$95.00 - $152.00');
            $table->string('shares_outstanding')->default('8.35 Million');
            $table->string('session_open')->nullable();
            $table->string('session_high')->nullable();
            $table->string('session_low')->nullable();
            $table->string('session_volume')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('investor_snapshots');
    }
};
