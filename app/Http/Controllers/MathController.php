<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function suma($num1, $num2)
    {
        return $num1 + $num2;
    }

    public function multiplicacion($num1, $num2)
    {
        

        return $num1 * $num2;
            
        
    }
}
