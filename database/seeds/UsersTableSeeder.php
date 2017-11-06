<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'zubiri',
            'email' => 'zubiri@zubiri.com',
            'password' => bcrypt('zubiri'),
            'verificado' => true
        ];

        $admin = [
            'name' => 'admin',
            'identificador' => 12345678,
            'email' => 'admin@admin.com',
            'password' => bcrypt('zubiri')
        ];
        DB::table('users')->insert($user);
        DB::table('admins')->insert($admin);
    }
}
