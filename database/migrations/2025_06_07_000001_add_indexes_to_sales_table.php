<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('sales', function (Blueprint $table) {
            // Add index for code (if exists), user_id, property_code (if exists)
            if (Schema::hasColumn('sales', 'code')) {
                $table->index('code');
            }
            if (Schema::hasColumn('sales', 'property_code')) {
                $table->index('property_code');
            }
            $table->index('user_id');
        });
    }

    public function down()
    {
        Schema::table('sales', function (Blueprint $table) {
            if (Schema::hasColumn('sales', 'code')) {
                $table->dropIndex(['code']);
            }
            if (Schema::hasColumn('sales', 'property_code')) {
                $table->dropIndex(['property_code']);
            }
            $table->dropIndex(['user_id']);
        });
    }
};
