<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'role_name' => 'user'
            ],
            [
                'role_name' => 'admin'
            ],
            [
                'role_name' => 'superadmin'
            ],
        ];

        Role::insert($roles);
    }
}
