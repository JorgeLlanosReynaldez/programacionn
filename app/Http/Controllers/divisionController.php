<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class divisionController extends Controller
{
    public function calculadora() {
        return view('calculadora');
    }
    public function division(Request $request) {
        $a = (float)$request->input('a');
        $b = (float)$request->input('b');
        $resultado = 1;
        $texto = "no se puede dividir por 0 :(";
     
        
        
        if ($b == 0) {
        echo $texto;
        }
        else{
            $resultado = $a / $b;
        }
       
        return view('division', [
            'a' => $a,
            'b' => $b,
    
            'resultado' => $resultado,
            'texto' => $texto,
            
        ]);
    }



}
