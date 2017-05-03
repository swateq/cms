<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeding.
     */
    public function run()
    {
        DB::table('sliders')->truncate();

        DB::table('sliders')->insert(array(
            array(
                'title' => 'Phasellus tempor ut ligula eget porta',
                'description' => 'Phasellus tempor ut ligula eget porta. Maecenas elementum iaculis ante, ut mattis lorem semper vel',
                'path' => '/uploads/slider/slider_8.jpg',
                'file_name' => 'slider_8.jpg',
                'file_size' => 623998,
                'order' => 8,
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'title' => 'Aenean',
                'description' => 'Aenean ornare erat sed semper gravida',
                'path' => '/uploads/slider/slider_9.jpg',
                'file_name' => 'slider_9.jpg',
                'file_size' => 412537,
                'order' => 9,
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'title' => 'Mauris dapibus tellus',
                'description' => 'Mauris dapibus tellus eu orci vulputate, hendrerit venenatis augue dictum',
                'path' => '/uploads/slider/slider_10.jpg',
                'file_name' => 'slider_10.jpg',
                'file_size' => 492158,
                'order' => 10,
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'title' => 'Aenean',
                'description' => 'Aenean ornare erat sed semper gravida',
                'path' => '/uploads/slider/slider_9.jpg',
                'file_name' => 'slider_9.jpg',
                'file_size' => 412537,
                'order' => 9,
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
            array(
                'title' => 'Mauris dapibus tellus',
                'description' => 'Mauris dapibus tellus eu orci vulputate, hendrerit venenatis augue dictum',
                'path' => '/uploads/slider/slider_10.jpg',
                'file_name' => 'slider_10.jpg',
                'file_size' => 492158,
                'order' => 10,
                'lang' => 'en',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ),
        ));
    }
}
