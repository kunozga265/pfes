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
            'name'  => 'Staples'
        ]);
        Group::create([
            'name'  => 'Fruits'
        ]);
        Group::create([
            'name'  => 'Vegetables'
        ]);
        Group::create([
            'name'  => 'Legumes'
        ]);
        Group::create([
            'name'  => 'Meat, Milk and Milk Products'
        ]);
        Group::create([
            'name'  => 'Sugar Sweets and Beverages'
        ]);
    }
}
