<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
            $this->generateAdmin();
        });
    }

    /**
     * Store user data with role "admin" into storage.
     *
     * @return void
     */
    protected function generateAdmin()
    {
        $user = new User([
            'username' => env('ADMIN_USERNAME', 'admin'),
            'name' => env('ADMIN_FULLNAME', 'Administrator'),
            'email' => env('ADMIN_EMAIL', 'admin@admin.com'),
            'password' => env('ADMIN_PASSWORD', 'admin12345'),
        ]);

        $user->save();
        $user->markEmailAsVerified();

        $user->syncRoles(Role::ROLE_ADMIN);
    }
}
