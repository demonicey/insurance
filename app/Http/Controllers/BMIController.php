<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMIController extends Controller
{
    public function showCalculator()
    {
        return view('bmi.calculator');
    }

    public function calculate(Request $request)
    {
        $weight = $request->input('weight');
        $height = $request->input('height');

        // Calculate BMI
        $bmi = $weight / ($height * $height);

        return view('bmi.result', ['bmi' => $bmi]);
    }
}

