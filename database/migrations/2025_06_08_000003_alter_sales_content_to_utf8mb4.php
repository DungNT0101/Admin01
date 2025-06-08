<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up()
    {
        // Đổi charset/collation cho cột content
        DB::statement("ALTER TABLE sales MODIFY content TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL");
    }

    public function down()
    {
        // Nếu muốn rollback về utf8
        DB::statement("ALTER TABLE sales MODIFY content TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL");
    }
};
