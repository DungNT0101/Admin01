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
            $table->string('price')->nullable();
            $table->string('area')->nullable();
            $table->string('equivalent_value')->nullable();
            $table->string('law')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('bathroom')->nullable();
            $table->string('direction')->nullable();
            $table->string('front')->nullable();
            $table->string('road')->nullable();
            $table->string('video')->nullable();
            $table->string('maps')->nullable();
            $table->string('zalo')->nullable();
            $table->string('facebook')->nullable();
            $table->boolean('favorite')->default(0);
            $table->string('province')->nullable();
            $table->string('price_per_sqm')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sales');
    }
};
