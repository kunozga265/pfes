<?php

namespace App\Http\Controllers;

use App\Http\Resources\LogResource;
use App\Models\Log;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogController extends Controller
{
    public function index(Request $request,$uid)
    {
        $user=User::find(Auth::id());

        $year = $request->query('y');
        $month = $request->query('m');
        $day = $request->query('d');

        if($year && $month && $day){
            $date=Carbon::create($year,$month,$day,0,0,0);
        }
        //default
        else{
            $date=Carbon::today();
        }

        //calculate limits
        $startDate=$date->getTimestamp();
        $endDate=$date->addHours(24)->getTimestamp();

        $logs=$user->logs()
            ->where("date",">=",$startDate)
            ->where("date","<",$endDate)
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
            'user_id'   => Auth::id(),
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

    public function destroy($id)
    {
        $user = User::find(Auth::id());
        $log = $user->logs()->where('id',$id)->first();
        if(is_object($log)) {
            $log->delete();
            return response()->json([
                "message"=>"Log removed"
            ]);
        }
        else{
            return response()->json([
                "message"=>"Error. Log not found"
            ], 404);
        }

    }

}
