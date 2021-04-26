<?php

use Illuminate\Database\Seeder;

use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'super-admin',
            'guard_name' => 'web'
        ]);
        Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'pemuda',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'bendahara',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'sekertaris',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'user',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'admin-wifi',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'wifi',
            'guard_name' => 'web'
        ]);
        
    }
}
