<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FreeTrialController extends Controller
{
    public function index(Request $request)
    {
        try {
            return view('ums.trial.trial');
        } catch (\Throwable $th) {
            //throw $th;
            return response()->redirectTo('/');
        }
    }
}
