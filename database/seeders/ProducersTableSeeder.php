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
                'id' => 1,
                'name' => 'Gundam shop Huế',
                'slug' => 'gundam-shop-hue1618382933',
                'address' => 'Hồ Đắc Di, Tp Huế',
                'phone' => '3934842223',
                'taxCode' => 1331213123121,
                'image' => 'imageProducer/10_vclub_1618382933.png',
                'created_at' => '2021-04-14 06:48:53',
                'updated_at' => '2021-04-25 14:32:14',
                'deleted_at' => '2021-04-25 14:32:14',
            ),
            1 => 
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
            2 => 
            array (
                'id' => 3,
                'name' => 'Daban',
                'slug' => 'daban1619361213',
                'address' => 'Thành phố Hồ Chí Minh',
                'phone' => '0913131222',
                'taxCode' => 2342343242343,
                'image' => 'imageProducer/daban_1619361213.jpg',
                'created_at' => '2021-04-25 14:33:33',
                'updated_at' => '2024-01-19 07:15:56',
                'deleted_at' => '2024-01-19 07:15:56',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Super Nova',
                'slug' => 'super-nova1619361261',
                'address' => 'Thành phố Hồ Chí Minh',
                'phone' => '0123456781',
                'taxCode' => 13144212232211,
                'image' => 'imageProducer/super_nova_1619361261.jpg',
                'created_at' => '2021-04-25 14:34:21',
                'updated_at' => '2024-01-19 07:15:52',
                'deleted_at' => '2024-01-19 07:15:52',
            ),
        ));
        
        
    }
}