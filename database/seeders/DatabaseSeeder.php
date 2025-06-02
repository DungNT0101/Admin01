<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'user_name' => 'Admin',
            'password' => Hash::make('admin@admin123'),
        ]);

        DB::table('dashboard')->insert([
            'title' => 'Sandat.net',
            'keywords' => 'Sandat.net, sandat, sandat.net, sandat.vn',
            'description' => 'Sandat.net - Chuyên cung cấp các dịch vụ bất động sản, nhà đất, cho thuê nhà đất tại Việt Nam',
        ]);
    }
}
