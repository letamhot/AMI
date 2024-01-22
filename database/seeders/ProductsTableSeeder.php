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
                'id' => 1,
                'name' => 'Gamdum',
                'slug' => 'gamdum1618388986',
                'id_category' => 1,
                'id_producer' => 1,
                'amount' => 12,
                'image' => 'imageProduct/121459708_403251084178097_1329374978001414759_n_1618382964.jpg',
                'image1' => 'imageProduct/121648553_784632542389446_3566435560311680692_n_1618382964.jpg',
                'image2' => 'imageProduct/10_vclub_1618382964.png',
                'price' => 21000,
                'new' => 1,
                'description' => 'Helllo',
                'created_at' => '2021-04-14 06:49:24',
                'updated_at' => '2021-04-25 14:30:29',
                'deleted_at' => '2021-04-25 14:30:29',
            ),
            1 => 
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
            2 => 
            array (
                'id' => 3,
                'name' => 'Daban Mô Hình Gundam HG Shiranui Akatsuki',
                'slug' => 'daban-mo-hinh-gundam-hg-shiranui-akatsuki1619539253',
                'id_category' => 2,
                'id_producer' => 3,
                'amount' => 20,
                'image' => 'imageProduct/6ed59eeccd5ee8b39d69d3ca88462036_copy_copy_copy_1619361839.jpg',
                'image1' => 'imageProduct/6ed59eeccd5ee8b39d69d3ca88462036_copy_copy_copy_copy_copy_1619361839.jpg',
                'image2' => 'imageProduct/400_1619361839.jpg',
                'price' => 1800000,
                'new' => 1,
                'description' => 'Tỷ Lệ : 1:144

Độ Tuổi : >14

Phân Loại Sp : Lắp Ráp

Sản Phẩm Nhựa Cao Cấp Với Độ Sắc Nét Cao
Sản Xuất Bởi Bandai Namco – Nhật Bản
An Toàn Với Trẻ Em
Phát Triển Trí Não Cho Trẻ Hiệu Quả Đi Đôi Với Niềm Vui Thích Bất Tận
Rèn Luyện Tính Kiên Nhẫn Cho Người Chơi',
                'created_at' => '2021-04-25 14:43:59',
                'updated_at' => '2024-01-19 07:32:43',
                'deleted_at' => '2024-01-19 07:32:43',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Mô Hình Gundam HG X Maoh',
                'slug' => 'mo-hinh-gundam-hg-x-maoh1619539264',
                'id_category' => 2,
                'id_producer' => 3,
                'amount' => 20,
                'image' => 'imageProduct/hg_1619361918.jpg',
                'image1' => 'imageProduct/hg_gundam_marchosias_4_1619361918.jpg',
                'image2' => 'imageProduct/hg_gundam_marchosias_box_art_1619361918.jpg',
                'price' => 1800000,
                'new' => 1,
                'description' => 'Tỷ Lệ : 1:144

Độ Tuổi : >14

Phân Loại Sp : Lắp Ráp

Sản Phẩm Nhựa Cao Cấp Với Độ Sắc Nét Cao
Sản Xuất Bởi Bandai Namco – Nhật Bản
An Toàn Với Trẻ Em
Phát Triển Trí Não Cho Trẻ Hiệu Quả Đi Đôi Với Niềm Vui Thích Bất Tận
Rèn Luyện Tính Kiên Nhẫn Cho Người Chơi',
                'created_at' => '2021-04-25 14:45:18',
                'updated_at' => '2024-01-19 07:32:52',
                'deleted_at' => '2024-01-19 07:32:52',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Daban 6619S Mô Hình Gundam MG Nu Ver Ka Titanium Finish',
                'slug' => 'daban-6619s-mo-hinh-gundam-mg-nu-ver-ka-titanium-finish1619539246',
                'id_category' => 3,
                'id_producer' => 3,
                'amount' => 21,
                'image' => 'imageProduct/20201229215019_800x800_1619417328.jpg',
                'image1' => 'imageProduct/20201229215100_800x800_1619361993.jpg',
                'image2' => 'imageProduct/20201229215052_800x800_1619417328.jpg',
                'price' => 9500000,
                'new' => 1,
                'description' => 'Tỷ Lệ : 1:100

Độ Tuổi : >14

Phân Loại Sp : Lắp Ráp

Sản Phẩm Nhựa Cao Cấp Với Độ Sắc Nét Cao
Sản Xuất Bởi Bandai Namco – Nhật Bản
An Toàn Với Trẻ Em
Phát Triển Trí Não Cho Trẻ Hiệu Quả Đi Đôi Với Niềm Vui Thích Bất Tận
Rèn Luyện Tính Kiên Nhẫn Cho Người Chơi',
                'created_at' => '2021-04-25 14:46:33',
                'updated_at' => '2024-01-19 07:32:39',
                'deleted_at' => '2024-01-19 07:32:39',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Gundam Bandai PG RX-78-2 2020',
                'slug' => 'gundam-bandai-pg-rx-78-2-20201619362558',
                'id_category' => 4,
                'id_producer' => 2,
                'amount' => 21,
                'image' => 'imageProduct/10729406b_1619362558.jpg',
                'image1' => 'imageProduct/10729406b2_1619362558.jpg',
                'image2' => 'imageProduct/rx78_1619362558.jpg',
                'price' => 6000000,
                'new' => 1,
                'description' => 'Sản phẩm PG mới nhất sẽ có các đặc điểm sau :
SP là thành quả kết tinh của các công nghệ sản xuất mô hình mới nhất của Bandai
Frame ( khung xương ) có kích thước chiều dài chân tới 18cm
Hơn 90 góc cử động ( số lượng cao nhất trong lịch sử thiết kế Gundam Bandai ), đi kèm khả năng khóa khớp.
Nhiều chi tiết có màu kim loại ( tổng cộng 4 mã màu kim loại )
Sử dụng nhiều chất màu trong sản phẩm : bạc, mờ, chrome bóng, metal part, 1 số chi tiết kim loại ốp lên frame.
Là mô hình có nhiều chi tiết open-hatch , gimmick nhất trong lịch sử Gundam.
Trang bị đèn LED có khả năng thay đổi màu, đèn led được thiết kế để vừa tăng độ thẩm mỹ nhưng vẫn đảm bảo biên độ cử động là tốt nhất.
Kèm đèn LED trong Beam saber ( kiếm năng lượng )',
                'created_at' => '2021-04-25 14:55:58',
                'updated_at' => '2024-01-19 07:32:47',
                'deleted_at' => '2024-01-19 07:32:47',
            ),
            6 => 
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
            7 => 
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
            8 => 
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
            9 => 
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
            10 => 
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