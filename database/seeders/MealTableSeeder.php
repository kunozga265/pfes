<?php

namespace Database\Seeders;

use App\Models\Meal;
use Illuminate\Database\Seeder;

class MealTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Meal::create([
            'name'  => 'Breakfast'
        ]);

        Meal::create([
            'name'  => 'Morning Snack'
        ]);

        Meal::create([
            'name'  => 'Lunch'
        ]);

        Meal::create([
            'name'  => 'Afternoon Snack'
        ]);

        Meal::create([
            'name'  => 'Dinner'
        ]);
    }
}
