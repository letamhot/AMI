<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Đồ ăn vặt',
                'slug' => 'do-an-vat',
                'created_at' => '2021-04-25 14:39:14',
                'updated_at' => '2024-01-19 07:15:34',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Bánh sinh nhật',
                'slug' => 'banh-sinh-nhat',
                'created_at' => '2021-04-25 14:39:30',
                'updated_at' => '2024-01-22 01:27:22',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}