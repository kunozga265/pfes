<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create([
            'name'  => 'Staples',
            'image' => 'images/groups/staples.png'
        ]);
        Group::create([
            'name'  => 'Fruits',
            'image' => 'images/groups/fruits.png'
        ]);
        Group::create([
            'name'  => 'Vegetables',
            'image' => 'images/groups/vegetables.png'
        ]);
        Group::create([
            'name'  => 'Legumes',
            'image' => 'images/groups/legumes.png'
        ]);
        Group::create([
            'name'  => 'Meat, Milk and Milk Products',
            'image' => 'images/groups/milk.png'
        ]);
        Group::create([
            'name'  => 'Sugar Sweets and Beverages',
            'image' => 'images/groups/sweets.png'
        ]);
        Group::create([
            'name'  => 'Biscuits, Cakes, Crackers and Energy Bars',
            'image' => 'images/groups/biscuits.png'
        ]);
    }
}
