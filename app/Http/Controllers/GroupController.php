<?php

namespace App\Http\Controllers;

use App\Http\Resources\GroupResource;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        return response()->json(GroupResource::collection($groups));
    }

    public function show($id)
    {
        $group=Group::find($id);

        if (is_object($group)){
            return response()->json(new GroupResource($group));
        }else
            return response()->json(["message"=>"Group not found"],404);
    }
}
