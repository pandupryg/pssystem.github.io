<?php

use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('phone')->insert([
            //samsung
            [
                'id' => '1',
                'type_name' => 'Samsung Note 20',
                'brand_id' => '1',
                'photo' => 'samsung2.jpg',
            ],

            [
                'id' => '2',
                'type_name' => 'Samsung Galaxy S20 Plus',
                'brand_id' => '1',
                'photo' => 'samsung6.jpg',
            ],

            [
                'id' => '3',
                'type_name' => 'Samsung Galaxy A51',
                'brand_id' => '1',
                'photo' => 'samsung3.jpg',
            ],

            [
                'id' => '4',
                'type_name' => 'Samsung Galaxy A50s',
                'brand_id' => '1',
                'photo' => 'samsung4.jpg',
            ],

            [
                'id' => '5',
                'type_name' => 'Samsung Galaxy A01',
                'brand_id' => '1',
                'photo' => 'samsung5.jpg',
            ],

            //apple
            [
                'id' => '6',
                'type_name' => 'iPhone 8',
                'brand_id' => '2',
                'photo' => 'iphone1.png',
            ],

            [
                'id' => '7',
                'type_name' => 'iPhone 8+',
                'brand_id' => '2',
                'photo' => 'iphone2.jpg',
            ],

            [
                'id' => '8',
                'type_name' => 'iPhone SE 2020',
                'brand_id' => '2',
                'photo' => 'iphone3.png',
            ],

            [
                'id' => '9',
                'type_name' => 'iPhone XR',
                'brand_id' => '2',
                'photo' => 'iphone4.png',
            ],

            [
                'id' => '10',
                'type_name' => 'iPhone 11',
                'brand_id' => '2',
                'photo' => 'iphone5.jpg',
            ],

            //oppo
            [
                'id' => '11',
                'type_name' => 'Oppo Reno4 F',
                'brand_id' => '3',
                'photo' => 'oppo1.png',
            ],

            [
                'id' => '12',
                'type_name' => 'Oppo Reno4 Pro',
                'brand_id' => '3',
                'photo' => 'oppo2.png',
            ],

            [
                'id' => '13',
                'type_name' => 'Find X2 Pro',
                'brand_id' => '3',
                'photo' => 'oppo3.png',
            ],

            [
                'id' => '14',
                'type_name' => 'Find X2',
                'brand_id' => '3',
                'photo' => 'oppo4.png',
            ],

            [
                'id' => '15',
                'type_name' => 'Oppo Reno4',
                'brand_id' => '3',
                'photo' => 'oppo5.png',
            ],

            //realme
            [
                'id' => '16',
                'type_name' => 'Realme C17',
                'brand_id' => '4',
                'photo' => 'realme1.png',
            ],

            [
                'id' => '17',
                'type_name' => 'Realme 7 Pro',
                'brand_id' => '4',
                'photo' => 'realme2.png',
            ],

            [
                'id' => '18',
                'type_name' => 'Realme 7',
                'brand_id' => '4',
                'photo' => 'realme3.png',
            ],

            [
                'id' => '19',
                'type_name' => 'Realme 6 Pro',
                'brand_id' => '4',
                'photo' => 'realme4.png',
            ],

            [
                'id' => '20',
                'type_name' => 'Realme X50 Pro 5G',
                'brand_id' => '4',
                'photo' => 'realme5.png',
            ],

            //vivo
            [
                'id' => '21',
                'type_name' => 'Vivo Y51',
                'brand_id' => '5',
                'photo' => 'vivo1.png',
            ],

            [
                'id' => '22',
                'type_name' => 'Vivo V20',
                'brand_id' => '5',
                'photo' => 'vivo2.png',
            ],

            [
                'id' => '23',
                'type_name' => 'Vivo V20 SE',
                'brand_id' => '5',
                'photo' => 'vivo3.png',
            ],

            [
                'id' => '24',
                'type_name' => 'Vivo X50',
                'brand_id' => '5',
                'photo' => 'vivo4.png',
            ],

            [
                'id' => '25',
                'type_name' => 'Vivo X50 Pro',
                'brand_id' => '5',
                'photo' => 'vivo5.png',
            ],

            //huawei
            [
                'id' => '26',
                'type_name' => 'Huawei P30 Pro',
                'brand_id' => '6',
                'photo' => 'huawei1.jpg',
            ],

            [
                'id' => '27',
                'type_name' => 'Huawei P40 Pro Plus 5G',
                'brand_id' => '6',
                'photo' => 'huawei2.jpg',
            ],

            [
                'id' => '28',
                'type_name' => 'Huawei Mate 30',
                'brand_id' => '6',
                'photo' => 'huawei3.jpg',
            ],

            [
                'id' => '29',
                'type_name' => 'Huawei Mate 30 Pro 5G',
                'brand_id' => '6',
                'photo' => 'huawei4.jpg',
            ],

            [
                'id' => '30',
                'type_name' => 'Huawei P30 Lite',
                'brand_id' => '6',
                'photo' => 'huawei5.jpg',
            ],

        ]);
    }
}
