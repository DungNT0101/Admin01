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
        Schema::create('kien_thuc', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('keywords')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('type')->nullable();
            $table->tinyInteger('home')->nullable();
            $table->tinyInteger('hot')->nullable();
            $table->string('avatar')->nullable();
            $table->text('content')->nullable();
            $table->text('images')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kien_thuc');
    }
};
