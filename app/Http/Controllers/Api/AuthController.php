<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
// use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email|unique:users,email',
                'password' => 'required|confirmed|min:8',
                'phone_number' => 'required|numeric|digits:10|unique:users,phone_number',
                'name' => 'required|string',
                'address' => 'required|string',
                'role' => 'in:user,admin,manager,captain',
            ]);
            $user = User::create([
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'phone_number' => $request->phone_number,
                'name' => $request->name,
                'address' => $request->address,
                'role' => $request->role ?? 'user'
            ]);
            return response()->json([
                'status' => True,
                'message' => 'User create successfully',
                'user' => $user
            ], 201);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => $e->validator->errors()
            ], 422);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function login(request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);
            if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return response()->json([
                    'message' => 'Invalid creadentials'
                ], 401);
            }
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'message' => 'login successful',
                'user' => $user,
                'token' => $token,
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => $e->validator->errors()
            ], 422);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function profile()
    {
        try {
            $user = Auth::user();
            return response()->json([
                'message' => 'Profile retrieved successfully',
                'user' => $user,
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function logout()
    {
        try {
            Auth::user()->tokens()->delete();
            return response()->json([
                'message' => 'Logout successful'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }
    public function changePassword(request $request){
        try{
            $request->validate([
                'old_password'=>'required',
                'new_password'=>'required|confirmed'
            ]);
            $user=Auth::user();
            if(!Hash::check($request->old_password,$user->password)){
                return response()->json([
                    'message'=> 'Old password is incorrect'
                ],422);
            }
            $user->password=bcrypt($request->new_password);
            $user->save();
            return response()->json([
                'message' => 'Password changed successfully '
            ], 200);

        }catch(ValidationException $e){
            return response()->json([
                'message' => $e->validator->errors()
            ], 422);
        }
    }
}
