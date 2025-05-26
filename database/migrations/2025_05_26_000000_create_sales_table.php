<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('type')->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('address')->nullable();
            $table->string('type_property')->nullable();
            $table->text('content')->nullable();
            $table->decimal('price', 18, 2)->nullable();
            $table->decimal('area', 10, 2)->nullable();
            $table->decimal('equivalent_value', 18, 2)->nullable();
            $table->string('law')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('bathroom')->nullable();
            $table->string('direction')->nullable();
            $table->decimal('front', 10, 2)->nullable();
            $table->decimal('road', 10, 2)->nullable();
            $table->string('video')->nullable();
            $table->string('maps')->nullable();
            $table->string('zalo')->nullable();
            $table->string('facebook')->nullable();
            $table->boolean('favorite')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sales');
    }
};
