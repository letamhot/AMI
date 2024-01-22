<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProducersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('producers')->delete();
        
        \DB::table('producers')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'AMIBAKESHOP',
                'slug' => 'amibakeshop1705648670',
                'address' => 'Đối diện nhà Văn Hoá xóm 2, thôn Văn La, xã Lương Ninh, huyện Quảng Ninh, tỉnh Quảng Bình',
                'phone' => '0822175675',
                'taxCode' => 123123111,
                'image' => 'imageProducer/ami_1705648669.jpg',
                'created_at' => '2021-04-25 14:32:37',
                'updated_at' => '2024-01-19 07:17:50',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}