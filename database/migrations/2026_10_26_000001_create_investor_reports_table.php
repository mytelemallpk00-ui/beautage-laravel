<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('investor_reports', function (Blueprint $table) {
            $table->id();
            $table->string('badge_label');
            $table->string('badge_tone')->default('purple');
            $table->string('title');
            $table->text('description');
            $table->string('file_label')->nullable();
            $table->string('download_message');
            $table->unsignedSmallInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('investor_reports');
    }
};
