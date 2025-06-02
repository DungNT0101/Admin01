<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dashboard')->insert([
            'title' => 'Sandat.net',
            'keywords' => 'Sandat.net, sandat, sandat.net, sandat.vn',
            'description' => 'Sandat.net - Chuyên cung cấp các dịch vụ bất động sản, nhà đất, cho thuê nhà đất tại Việt Nam',
        ]);
    }
}
