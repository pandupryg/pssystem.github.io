<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brand')->insert([
            [
                'id' => '1',
                'brand_name' => 'Samsung',
                'photo' => 'samsung_logo.png',
            ],

            [
                'id' => '2',
                'brand_name' => 'Apple',
                'photo' => 'Apple_logo.png',
            ],

            [
                'id' => '3',
                'brand_name' => 'Oppo',
                'photo' => 'oppo_logo.jpg',
            ],

            [
                'id' => '4',
                'brand_name' => 'Realme',
                'photo' => 'realme_logo.png',
            ],

            [
                'id' => '5',
                'brand_name' => 'Vivo',
                'photo' => 'vivo_logo.jpg',
            ],

            [
                'id' => '6',
                'brand_name' => 'Huawei',
                'photo' => 'huawei_logo.jpg',
            ],
        ]);
    }
}
