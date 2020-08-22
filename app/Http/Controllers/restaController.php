<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class restaController extends Controller
{
    public function calculadora() {
        return view('calculadora');
    }
    public function resta(Request $request) {
        $a = (float)$request->input('a');
        $b = (float)$request->input('b');
        

      
        
        $resultado = $a - $b;
       
          
       
        return view('resta', [
            'a' => $a,
            'b' => $b,
    
            'resultado' => $resultado,
            
        ]);
    }
}
