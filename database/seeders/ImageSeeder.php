<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('store_ones')->insert([
            'image_one' => '"sg6.jpg"',
            'image_two' => '"sg.jpg"',
            'image_three' => '"sg2.jpg"',
            'image_four' => '"sg3.jpg"',
            'image_five' => '"sg5.jpg"',
            'image_six' => '"sg7.jpg"',
            'image_seven' => '"sg8.jpeg"',
        ]);
    }
}
