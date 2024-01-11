<?php

namespace App\Http\Controllers;

use App\Http\Resources\FoodResource;
use App\Models\Food;
use App\Models\Group;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    public function home()
    {
        $groups=Group::all();
        $foods=Food::orderBy('item','asc')->get();

        return Inertia::render("Home",[
            'groups'    => $groups,
            'foods'     => $foods
        ]);
    }
    public function carbInfo()
    {
        $groups=Group::all();
        $foods=Food::orderBy('item','asc')->get();

        return Inertia::render("CarbInfo",[
            'groups'    => $groups,
            'foods'     => $foods
        ]);
    }

    public function carbCounting()
    {
        $foods=Food::orderBy('item','asc')->get();

        return Inertia::render("CarbCounting",[
            'foods'     => FoodResource::collection($foods)
        ]);
    }

    public function carbCompare()
    {
        $foods=Food::orderBy('item','asc')->get();

        return Inertia::render("CarbCompare",[
            'foods'     => FoodResource::collection($foods)
        ]);
    }
}
