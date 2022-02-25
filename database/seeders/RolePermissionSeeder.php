<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ([
            [
                'name' => Role::ROLE_ADMIN,
                'guard_name' => 'web',
            ],
            [
                'name' => Role::ROLE_MANAGER,
                'guard_name' => 'web',
            ],
            [
                'name' => Role::ROLE_STAFF,
                'guard_name' => 'web',
            ],
        ] as $role) {
            Role::create($role);
        }
    }
}
