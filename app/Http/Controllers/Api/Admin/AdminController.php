<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __invoke(Request $request)
    {
        try {
            return response()->json([
                'status'=>true,
                'data'=>auth()->guard('admin')->user()
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'status'=>false,
                'data'=>[],
                'message'=>'Got a server error, please contact for support'
            ],200);
        }
    }
}
