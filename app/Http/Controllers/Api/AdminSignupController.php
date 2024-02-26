<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\PasswordLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminSignupController extends Controller
{
    //admin signup
    public function __invoke(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:100',
                'email' => 'email|required|unique:admins,email',
                'phone' => 'required|max:20',
                'country' => 'string|required|max:20',
                'state' => 'nullable|string|max:20',
                'city' => 'required|string|max:50',
                'zipcode' => 'required|string|max:10',
                'password' => 'required|string|max:32|min:8',
                'confirm_password' => 'required|string|same:password'
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Validation error, please fix the following error',
                    'errors' => $validator->errors(),
                ]);
            }
            $create = Admin::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'country' => $request->input('country'),
                'state' => $request->input('country'),
                'city' => $request->input('city'),
                'zipcode' => $request->input('zipcode'),
                'password' => Hash::make($request->input('password')),
            ]);
            $passwordLog = new PasswordLog([
                'password' => encrypt($request->input('password')),
            ]);
            $create->passwordLog()->save($passwordLog);
            if ($create) {
                return response()->json([
                    'status' => true,
                    'message' => 'Admin successfully signup'
                ]);
            }
            return response()->json([
                'status' => false,
                'message' => 'Something went wrong, please try again later'
            ]);
        } catch (\Throwable $th) {
            throw $th;
            return response()->json([
                'status' => false,
                'message' => 'Got a server error, please contact for support'
            ]);
        }
    }
}
