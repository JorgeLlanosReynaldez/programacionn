<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calController extends Controller
{
    public function calculadora() {
        return view('calculadora');
    }
    public function solucioncal(Request $request) {
        $a = (float)$request->input('a');
        $b = (float)$request->input('b');
        

      
        
        $resultado = $a + $b;
       
          
       
        return view('solucioncal', [
            'a' => $a,
            'b' => $b,
    
            'resultado' => $resultado,
            
        ]);
    }
}
