<?php

namespace App\Http\Controllers;

use App\Http\Resources\FoodResource;
use App\Http\Resources\PlanResource;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id());

        $plans = $user->plans;
        return response()->json(PlanResource::collection($plans));
    }

    public function store(Request $request)
    {
        $request->validate([
            "quantity"  => ['required'],
            "food_id"   => ['required'],
            "meal_id"   => ['required'],
        ]);

        $plan=Plan::create([
            'quantity'  => $request->quantity,
            'meal_id'   => $request->meal_id,
            'food_id'   => $request->food_id,
            'user_id'   => Auth::id(),
        ]);

        //force API return
        return response()->json(new PlanResource($plan));
    }

    public function destroy($id)
    {
        $user = User::find(Auth::id());
        $plan = $user->plans()->where('id',$id)->first();
        if(is_object($plan)) {
            $plan->delete();
            return response()->json([
                "message"=>"Item removed"
            ]);
        }
        else{
            return response()->json([
                "message"=>"Error. Item not found"
            ], 404);
        }

    }
}
