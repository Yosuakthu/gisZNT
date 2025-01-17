<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Levels extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $levels = [
            ['id' => 1, 'level' => 'admin'],
            ['id' => 2, 'level' => 'user'],
        ];

        foreach ($levels as $level) {
            DB::table('level')->updateOrInsert(
                ['id' => $level['id']], // Kondisi cek
                [
                    'level' => $level['level'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
    }
}
} 
