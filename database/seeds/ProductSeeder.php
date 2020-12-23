<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        	'name'=>'OPPO Mobile',
        	'price'=>'20000',
        	'category'=>'mobile',
        	'gallery'=>'oppo.jpg',
        	'description'=>'OPPO with 4GB RAM and much more feature',

        	],
        	[
        	'name'=>'Samsung TV',
        	'price'=>'15000',
        	'category'=>'tv',
        	'gallery'=>'samsung.jpg',
        	'description'=>'Samsung tv much more feature',

        	],
        	[
        	'name'=>'LG Tv',
        	'price'=>'10000',
        	'category'=>'tv',
        	'gallery'=>'lgtv.jpg',
        	'description'=>'LG with 4GB RAM and much more feature',

        	],
        	[
        	'name'=>'Panasonics fridge',
        	'price'=>'10000',
        	'category'=>'fridge',
        	'gallery'=>'fridge.jpg',
        	'description'=>'fridge with 4GB RAM and much more feature',

        	],
         
        ]);
    }
}
