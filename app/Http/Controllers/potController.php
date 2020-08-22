<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class potController extends Controller
{
    public function calculadora() {
        return view('calculadora');
    }
    public function pot(Request $request) {
        $a = (float)$request->input('a');
        $b = (float)$request->input('b');
        

      
        
        $resultado = pow($a, $b);
       
          
       
        return view('pot', [
            'a' => $a,
            'b' => $b,
    
            'resultado' => $resultado,
            
        ]);
    }
}
