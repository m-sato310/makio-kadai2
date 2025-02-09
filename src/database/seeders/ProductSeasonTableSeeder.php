<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product_Season;

class Product_SeasonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product_Season::create([
            'product_id' => '1',
            'season_id' => '3'
        ]);

        Product_Season::create([
            'product_id' => '1',
            'season_id' => '4'
        ]);

        Product_Season::create([
            'product_id' => '2',
            'season_id' => '1'
        ]);

        Product_Season::create([
            'product_id' => '3',
            'season_id' => '4'
        ]);

        Product_Season::create([
            'product_id' => '4',
            'season_id' => '2'
        ]);

        Product_Season::create([
            'product_id' => '5',
            'season_id' => '2'
        ]);

        Product_Season::create([
            'product_id' => '6',
            'season_id' => '2'
        ]);

        Product_Season::create([
            'product_id' => '6',
            'season_id' => '3'
        ]);

        Product_Season::create([
            'product_id' => '7',
            'season_id' => '1'
        ]);

        Product_Season::create([
            'product_id' => '7',
            'season_id' => '2'
        ]);

        Product_Season::create([
            'product_id' => '8',
            'season_id' => '2'
        ]);

        Product_Season::create([
            'product_id' => '8',
            'season_id' => '3'
        ]);

        Product_Season::create([
            'product_id' => '9',
            'season_id' => '2'
        ]);

        Product_Season::create([
            'product_id' => '10',
            'season_id' => '1'
        ]);

        Product_Season::create([
            'product_id' => '10',
            'season_id' => '2'
        ]);
    }
}
