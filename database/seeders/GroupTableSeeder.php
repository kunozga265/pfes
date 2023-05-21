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
            'name'  => 'Fats and oils',
            'image' => 'images/groups/biscuits.png'
        ]);
        Group::create([
            'name'  => 'Beverages, sugar, sweets and snacks',
            'image' => 'images/groups/sweets.png'
        ]);
    }
}
