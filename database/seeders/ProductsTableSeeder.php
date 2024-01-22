<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Bánh bông lan trứng muối',
                'slug' => 'banh-bong-lan-trung-muoi1705653620',
                'id_category' => 3,
                'id_producer' => 2,
                'amount' => 10,
                'image' => 'imageProduct/bltm_1705649202.jpg',
                'image1' => 'imageProduct/bltm8_1705649203.jpg',
                'image2' => 'imageProduct/bltm7_1705649203.jpg',
                'price' => 55000,
                'new' => 1,
                'description' => 'Bánh bông lan trứng muối
Nguyên liệu: Bánh bông lan thơm ngon, trứng muối và sợi ruốc',
                'created_at' => '2021-04-25 14:42:42',
                'updated_at' => '2024-01-19 08:40:20',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 7,
                'name' => 'Trà sữa truyền thống',
                'slug' => 'tra-sua-truyen-thong1705653118',
                'id_category' => 2,
                'id_producer' => 2,
                'amount' => 100,
                'image' => 'imageProduct/ts2_1705653118.jpg',
                'image1' => 'imageProduct/ts2_1705653118.jpg',
                'image2' => 'imageProduct/ts2_1705653118.jpg',
                'price' => 20000,
                'new' => 1,
                'description' => 'Trà sữa truyền thống
Nguyên liệu: Trà xanh chắt lấy nước, sữa tươi, chân châu đen, đường đen',
                'created_at' => '2021-04-25 14:58:08',
                'updated_at' => '2024-01-19 08:31:58',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 8,
                'name' => 'Trà sữa kem trứng',
                'slug' => 'tra-sua-kem-trung1705653218',
                'id_category' => 2,
                'id_producer' => 2,
                'amount' => 100,
                'image' => 'imageProduct/ts1_1705653218.jpg',
                'image1' => 'imageProduct/ts_1705649550.jpg',
                'image2' => 'imageProduct/ts1_1705649550.jpg',
                'price' => 25000,
                'new' => 1,
                'description' => 'Trà sữa kem trứng
Nguyên liệu: Nước trà xanh chắt lọc, kem trứng, sữa tươi, dừa nướng vụn',
                'created_at' => '2021-04-25 15:01:59',
                'updated_at' => '2024-01-19 08:33:38',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 9,
                'name' => 'Su kem',
                'slug' => 'su-kem1705653207',
                'id_category' => 2,
                'id_producer' => 2,
                'amount' => 100,
                'image' => 'imageProduct/sukem2_1705653207.jpg',
                'image1' => 'imageProduct/sukem1_1705650578.jpg',
                'image2' => 'imageProduct/sukem_1705650578.jpg',
                'price' => 55000,
                'new' => 1,
                'description' => 'Bánh su kem
Nguyên liệu: Bánh nướng, kem trứng',
                'created_at' => '2024-01-19 07:49:38',
                'updated_at' => '2024-01-19 08:33:27',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 10,
                'name' => 'Bánh kem nhiều mẫu size vừa',
                'slug' => 'banh-kem-nhieu-mau-size-vua1705653641',
                'id_category' => 3,
                'id_producer' => 2,
                'amount' => 100,
                'image' => 'imageProduct/bk1_1705653268.jpg',
                'image1' => 'imageProduct/bk_1705650748.jpg',
                'image2' => 'imageProduct/bk5_1705650748.jpg',
                'price' => 200000,
                'new' => 1,
                'description' => 'Bánh kem nhiều mẫu đẹp, ngon chất lượng
Nguyên liệu: Bánh nướng, kem phối nhiều màu không phụ gia, lớp siro nhiều vị, đồ trang trí',
                'created_at' => '2024-01-19 07:52:28',
                'updated_at' => '2024-01-19 08:40:41',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 11,
                'name' => 'Bánh kem nhiều mẫu size lớn',
                'slug' => 'banh-kem-nhieu-mau-size-lon1705650871',
                'id_category' => 3,
                'id_producer' => 2,
                'amount' => 100,
                'image' => 'imageProduct/bk6_1705650870.jpg',
                'image1' => 'imageProduct/bk2_1705650870.jpg',
                'image2' => 'imageProduct/bk7_1705650871.jpg',
                'price' => 300000,
                'new' => 1,
                'description' => 'Bánh kem nhiều mẫu đẹp, ngon chất lượng 
Nguyên liệu: Bánh nướng, kem phối nhiều màu không phụ gia, lớp siro nhiều vị, đồ trang trí',
                'created_at' => '2024-01-19 07:54:31',
                'updated_at' => '2024-01-19 07:54:31',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}