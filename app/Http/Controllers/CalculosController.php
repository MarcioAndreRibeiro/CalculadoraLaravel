<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculosController extends Controller
{
    public function adicao(Request $request){
      printf("O resultado é: %d", ($request->input("num1") + $request->input("num2")));
    }

    public function subtracao(Request $request){
      printf("O resultado é: %d", ($request->input("num1") - $request->input("num2")));
     }

     public function multiplicacao(Request $request){
      printf("O resultado é: %d", ($request->input("num1") * $request->input("num2")));
     }

     public function divisao(Request $request){
      printf("O resultado é: %d", ($request->input("num1") / $request->input("num2")));
}
   };


         
