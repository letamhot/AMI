<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SlideImageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('slide_image')->delete();
        
        \DB::table('slide_image')->insert(array (
            0 => 
            array (
                'id' => 2,
                'image' => 'slides/slide_1705650436.jpg',
                'created_at' => '2021-04-25 15:03:04',
                'updated_at' => '2024-01-19 07:47:16',
            ),
            1 => 
            array (
                'id' => 5,
                'image' => 'slides/bk10_1705650451.jpg',
                'created_at' => '2021-04-25 15:04:38',
                'updated_at' => '2024-01-19 07:47:31',
            ),
            2 => 
            array (
                'id' => 6,
                'image' => 'slides/bk9_1705650466.jpg',
                'created_at' => '2021-04-25 15:06:11',
                'updated_at' => '2024-01-19 07:47:46',
            ),
        ));
        
        
    }
}