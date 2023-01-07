<?php

namespace App\Http\Controllers;

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
}
