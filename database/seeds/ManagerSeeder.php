<?php

use Illuminate\Database\Seeder;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user')->insert([
            [
                'id' => '1',
                'username' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => '$2y$12$lbITH4ZjYvO0wYttpVsJpuIlLDnf6J2tUjckYC/lf.dTkd.UvyH/W', //admin123
                'address' => 'Jalan darmawangsa',
                'gender' => 'M',
                'dateofbirth' => '2000-04-01',
                'role' => 'manager',
            ],
        ]);
    }
}
