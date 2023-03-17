<?php

namespace App\Http\Controllers;

use App\Http\Resources\LogResource;
use App\Models\Log;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogController extends Controller
{
    public function index(Request $request,$uid)
    {
        $user=User::FindorFail($uid);
        $logs=$user->logs()
            ->orderBy('date','desc')
            ->get();

        //force API return
        return response()->json(LogResource::collection($logs));

        if ((new AppController())->isApi($request))
            return response()->json(LogResource::collection($logs));
        else
            return 0;
    }

    public function store(Request $request,$uid)
    {
        $request->validate([
            "quantity"  => ['required'],
            "food_id"   => ['required'],
            "meal_id"   => ['required'],
            "date"      => ['required'],
        ]);

        $log=Log::create([
            'quantity'  => $request->quantity,
            'meal_id'   => $request->meal_id,
            'food_id'   => $request->food_id,
            'user_id'   => $uid,
            'date'      => $request->date,
        ]);

        //$log->foods()->attach($request->foods);

        //force API return
        return response()->json(new LogResource($log));

        if ((new AppController())->isApi($request))
            return response()->json(new LogResource($log));
        else
            return 0;

    }

}
