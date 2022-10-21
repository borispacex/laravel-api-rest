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
        // agreamos una insercion
        DB::table('products')->insert([
            'name' => "Iphone 13",
            'description' => "Mobile phone apple",
            'amount' => 980
        ]);
        DB::table('products')->insert([
            'name' => "Ipad Pro 12",
            'description' => "Tablet apple",
            'amount' => 850
        ]);
        DB::table('products')->insert([
            'name' => "PlayStation 5",
            'description' => "Video Console",
            'amount' => 540
        ]);
    }
}
