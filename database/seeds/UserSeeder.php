<?php

use Illuminate\Database\Seeder;

use App\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $superadmin = User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@superadmin.com',
            'password' => bcrypt('password')
        ]);

        $superadmin->assignRole('super-admin');
        

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);

        $admin->assignRole('admin');

        $pemuda = User::create([
            'name' => 'pemuda',
            'email' => 'pemuda@pemuda.com',
            'password' => bcrypt('password')
        ]);

        $pemuda->assignRole('pemuda');

        $bendahara = User::create([
            'name' => 'bendahara',
            'email' => 'bendahara@pemuda.com',
            'password' => bcrypt('password')
        ]);

        $bendahara->assignRole('bendahara');

        $sekertaris = User::create([
            'name' => 'sekertaris',
            'email' => 'sekertaris@pemuda.com',
            'password' => bcrypt('password')
        ]);

        $sekertaris->assignRole('sekertaris');

        $user = User::create([
            'name' => 'User Pengunjung',
            'email' => 'user@user.com',
            'password' => bcrypt('password')
        ]);

        $user->assignRole('user');

        $adminwifi = User::create([
            'name' => 'Admin-Wifi',
            'email' => 'adminwifi@adminwifi.com',
            'password' => bcrypt('password')
        ]);

        $adminwifi->assignRole('admin-wifi');

        $userwifi = User::create([
            'name' => 'User-Wifi',
            'email' => 'userwifi@adminwifi.com',
            'password' => bcrypt('password')
        ]);

        $userwifi->assignRole('wifi');

        

        
    }
}
