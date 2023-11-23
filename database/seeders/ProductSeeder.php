<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Samsung Mobile',
                'quantity' => '8',
                'price' => '20000'
            ],
            [
                'name' => 'Sony TV',
                'quantity' => '3',
                'price' => '55000'
            ],
            [
                'name' => 'Refrigerator',
                'quantity' => '7',
                'price' => '32000'
            ],
            [
                'name' => 'Shirt',
                'quantity' => '11',
                'price' => '2000'
            ],
            [
                'name' => 'Pant',
                'quantity' => '5',
                'price' => '2500'
            ],
            [
                'name' => 'Shoes',
                'quantity' => '15',
                'price' => '5000'
            ],
            [
                'name' => 'iPhone 14 Pro Max',
                'quantity' => '19',
                'price' => '126499'
            ],
            [
                'name' => 'Honda CBR 150R ABS',
                'quantity' => '9',
                'price' => '525000'
            ],
        ]);
    }
}
