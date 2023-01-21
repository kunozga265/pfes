<?php

namespace App\Http\Controllers;

use App\Http\Resources\FoodResource;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        $foods=Food::all();
        return response()->json(FoodResource::collection($foods));
    }

    public function search($query)
    {

        $foods=Food::where('item', 'like', '%' .trim($query). '%')->orderBy('item','asc')->get();
        return response()->json(FoodResource::collection($foods));


    }


    public function seeder(Request $request)
    {
        foreach ($request->foods as $food){
            Food::create([
                'item'              => $food["item"],
                'serving_size'      => $food["serving_size"],
                'serving_unit'      => ucfirst($food["serving_unit"]),
                'net_weight'        => $food["net_weight"],
                'energy'            => $food["energy"],
                'carbohydrate'      => $food["carbohydrate"],
                'fiber'             => $food["fiber"],
                'protein'           => $food["protein"],
                'fat'               => $food["fat"],
                'more_info'         => ucfirst($food["more_info"]),
                'source'            => ucfirst($food["source"]),
                'unpeeled_weight'   => $food["unpeeled_weight"],
                'group_id'          => $food["group_id"],
                'image'             => "images/foods/".$food["image"].".jpg",
            ]);
        }

        dd("Database seeded");
    }
}
