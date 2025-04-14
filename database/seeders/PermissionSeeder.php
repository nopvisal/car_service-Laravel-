<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            ['name' => 'create_user', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'edit_user', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'delete_user', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'view_user', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'create_post', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'edit_post', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'delete_post', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'view_post', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('permissions')->insert($permissions);
    }
}
