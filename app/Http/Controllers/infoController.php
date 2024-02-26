<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class infoController extends Controller{
    public function info()
    {
        return view('info');
    }

    public function calculate(Request $request)
    {
        $weight = $request->input('weight');
        $height = $request->input('height');

        // Calculate BMI
        $bmi = $weight / ($height * $height);

        return view('info.result', ['info' => $bmi]);
    }
}

