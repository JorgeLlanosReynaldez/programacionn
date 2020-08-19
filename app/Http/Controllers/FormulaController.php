<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulaController extends Controller
{
    public function formula() {
        return view('formula');
    }
    public function solucion(Request $request) {
        $a = (float)$request->input('a');
        $b = (float)$request->input('b');
        

      
        $discriminante = $a * $a + $b * $b;
        $resultado = (sqrt($discriminante));
       
          
       
        return view('solucion', [
            'a' => $a,
            'b' => $b,
    
            'resultado' => $resultado,
            
        ]);
    }

  
}
