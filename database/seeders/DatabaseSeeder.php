<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(SuperAdminSeeder::class);

        $superAdmin = User::create([
            'slug'  => 'admin',
            'name' => 'Admin',
            'phone_number'  => '01234567891',
            'is_admin'  => 1,
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456789')
        ]);

        Setting::create([
            'logo' => 'example.png',
            'address' => 'address',
            'map' => 'map',
            'email' => 'email',
            'phone' => 'phone',
            'landline' => 'landline',
            'fax' => 'fax',
            'facebook' => 'facebook.com',
            'twitter' => 'twitter.com',
            'instagram' => 'instagram.com',

        ]);


        $superAdminRole = Role::create([
            'name' => 'super-admin',
            'guard_name' => 'web',
        ]);



        $permissions = Permission::insert([
            [
                'name' => 'permissions',
                'guard_name' => 'web',
            ],
            [
                'name' => 'roles',
                'guard_name' => 'web',
            ],
            [
                'name' => 'users',
                'guard_name' => 'web',
            ],
        ]);

        foreach (Permission::all() as $permission) {
            $superAdminRole->permissions()->attach($permission);
        }

        $superAdmin->assignRole('super-admin');
    }
}
