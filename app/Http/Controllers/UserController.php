<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws ValidationException
     */
    public function login(Request $request)
    {
//        $request->validate([
//            "phone_number"  => ['required'],
//            "password"      => ['required'],
//        ]);

        $error=false;
        $message="";
        if (!isset($request->phone_number)){
            $error=true;
            $message="Phone Number Required";
        }else if (!isset($request->password)){
            $error=true;
            $message="Password Required";
        }

        if($error){
            return response()->json([
                'message' =>  $message
            ],400);
        }

        $user = User::where('phone_number', $request->phone_number)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            /*throw ValidationException::withMessages([
                'phone_number' => ['The provided credentials are incorrect.'],
            ]);*/
            return response()->json([
                'message' =>  "Incorrect credentials provided"
            ],400);
        }
        $token=$user->createToken($request->phone_number)->plainTextToken;

        return response()->json([
            'user'  =>  new UserResource($user),
            'token' =>  $token
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws ValidationException
     */
    public function register(Request $request)
    {
//        $request->validate([
//            "phone_number"  => ['required','unique:users','string'],
//            "password"      => ['required', 'confirmed', new \Laravel\Fortify\Rules\Password, 'string'],
//            'weight'        => ['required'],
//            'height'        => ['required'],
//        ]);
        $error=false;
        $message="";
        if (!isset($request->phone_number)){
            $error=true;
            $message="Phone Number Required";
        }else if (User::where('phone_number',$request->phone_number)->exists()){
            $error=true;
            $message="Phone Number Already Registered";
        }else if (!isset($request->password)){
            $error=true;
            $message="Password Required";
        }else if (!isset($request->password_confirmation)){
            $error=true;
            $message="Password Confirmation Required";
        }else if (!isset($request->weight)){
            $error=true;
            $message="Weight Required";
        }else if (!isset($request->height)){
            $error=true;
            $message="Height Required";
        }

        if($error){
            return response()->json([
                'message' =>  $message
            ],400);
        }


        $user=User::create([
            "name"          => ucwords($request->name),
            "phone_number"  => $request->phone_number,
            "password"      => bcrypt($request->password),
            'weight'        => $request->weight,
            'height'        => $request->height,
            'age'           => $request->age,
            'sex'           => $request->sex,
        ]);

        $token=$user->createToken($request->phone_number)->plainTextToken;

        return response()->json([
            'user'  =>  new UserResource($user),
            'token' =>  $token
        ]);
    }

    public function update(Request $request)
    {
//        $request->validate([
//            "phone_number"  => ['required','string'],
//            'weight'        => ['required'],
//            'height'        => ['required'],
//        ]);

        $error=false;
        $message="";
        if (!isset($request->phone_number)){
            $error=true;
            $message="Phone Number Required";
        }else if (!isset($request->weight)){
            $error=true;
            $message="Weight Required";
        }else if (!isset($request->height)){
            $error=true;
            $message="Height Required";
        }

        if($error){
            return response()->json([
                'message' =>  $message
            ],400);
        }

        $user = User::find(Auth::id());
        $user->update([
            "name"          => ucwords($request->name),
            "phone_number"  => $request->phone_number,
            'weight'        => $request->weight,
            'height'        => $request->height,
            'age'           => $request->age,
            'sex'           => $request->sex,
        ]);

        return response()->json(new UserResource($user));
    }
}
