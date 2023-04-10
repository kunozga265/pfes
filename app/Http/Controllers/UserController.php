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
        $request->validate([
            "phone_number"  => ['required'],
            "password"      => ['required'],
        ]);

        $user = User::where('phone_number', $request->phone_number)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'phone_number' => ['The provided credentials are incorrect.'],
            ]);
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
        $request->validate([
            "phone_number"  => ['required','unique:users','string'],
            "password"      => ['required', 'confirmed', new \Laravel\Fortify\Rules\Password, 'string'],
            'weight'        => ['required'],
            'height'        => ['required'],
        ]);

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
        $request->validate([
            "phone_number"  => ['required','string'],
            'weight'        => ['required'],
            'height'        => ['required'],
        ]);

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
