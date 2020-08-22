<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class multiController extends Controller
{
    public function calculadora() {
        return view('calculadora');
    }
    public function multi(Request $request) {
        $a = (float)$request->input('a');
        $b = (float)$request->input('b');
        

      
        
        $resultado = $a * $b;
       
          
       
        return view('multi', [
            'a' => $a,
            'b' => $b,
    
            'resultado' => $resultado,
            
        ]);
    }
    
}
