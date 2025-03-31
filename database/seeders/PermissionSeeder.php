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
        DB::table('permissions')->delete();
        $permissions = [
            ['name' => 'Access Tasks', 'guard_name' => 'web'],
            ['name' => 'View Tasks', 'guard_name' => 'web'],
            ['name' => 'Create Tasks', 'guard_name' => 'web'],
            ['name' => 'Update Tasks', 'guard_name' => 'web'],
            ['name' => 'Delete Tasks', 'guard_name' => 'web'],
            //
            ['name' => 'Access Projects', 'guard_name' => 'web'],
            ['name' => 'View Projects', 'guard_name' => 'web'],
            ['name' => 'Create Projects', 'guard_name' => 'web'],
            ['name' => 'Update Projects', 'guard_name' => 'web'],
            ['name' => 'Delete Projects', 'guard_name' => 'web'],
        ];
        DB::table('permissions')->insert($permissions);
    }
}