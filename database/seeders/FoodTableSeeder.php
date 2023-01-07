<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Seeder;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Food::create([
            'item'          =>  'Barnflakes',
            'serving_size'  =>  '1 Cup',
            'net_weight'    =>  40,
            'energy'        =>  131,
            'carbohydrate'  =>  20,
            'fiber'         =>  10,
            'protein'       =>  5,
            'fat'           =>  1,
            'more_info'     =>  null,
            'source'        =>  'Package',
        ]);
        Food::create([
            'item'          =>  'Bread, Brown',
            'serving_size'  =>  '1 Slice, Medium',
            'net_weight'    =>  35,
        ]);
        Food::create([
            'item'          =>  'Bread, White',
            'serving_size'  =>  '1 Slice, Medium',
            'net_weight'    =>  40,
            'energy'        =>  131,
            'carbohydrate'  =>  20,
            'fiber'         =>  10,
            'protein'       =>  5,
            'fat'           =>  1,
            'more_info'     =>  null,
            'source'        =>  'Package',
        ]);
    }
}
