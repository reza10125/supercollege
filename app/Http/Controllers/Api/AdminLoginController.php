<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Jenssegers\Agent\Facades\Agent;

class AdminLoginController extends Controller
{
    public function __invoke(Request $request)
    {
        try {
            $vlaidator = Validator::make($request->all(), [
                'email' => 'required|email|exists:admins,email',
                'password' => 'required',
            ]);
            if ($vlaidator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Validation error, please fix the following errors',
                ]);
            }
            $admin = Admin::where('email', $request->input('email'))->first();
            if (!$admin || !Hash::check($request->input('password'), $admin->password)) {
                throw ValidationException::withMessages([
                    'email' => ['The provided credentials are incorrect.'],
                ]);
            }
            
            return response()->json([
                'status' => true,
                'token' => $admin->createToken('admin-token', ['*'], now()->addWeek())->plainTextToken,
                'refresh_token' => $admin->createToken('admin-token', ["update:server"], now()->addMonth())->plainTextToken,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    // refresh token
    public function refresh_token(Request $request) {
        try {
            $admin = $request->user();
            return response()->json([
                'status'=>true,
                'token'=>$admin->createToken('admin-token',['*'],now()->addWeek())->plainTextToken
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
