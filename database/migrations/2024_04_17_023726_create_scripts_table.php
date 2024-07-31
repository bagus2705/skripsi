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
        Schema::create('scripts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('pengarang')->nullable();
            $table->string('lokasi')->nullable();
            $table->unsignedInteger('tahun')->nullable();
            $table->string('bahasa')->nullable();
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->text('detail');
            $table->text('transliterasi')->nullable();
            $table->text('translasi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scripts');
    }
};
