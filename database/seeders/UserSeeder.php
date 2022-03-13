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
            'bio' => "Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.",
        ]);

        $user->save();
        $user->markEmailAsVerified();

        $user->syncRoles(Role::ROLE_ADMIN);
    }
}
