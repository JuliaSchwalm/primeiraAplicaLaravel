<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador1 extends Controller
{
   public function index($nome){
       return view('home') -> with ("nome", $nome);
   }
   public function index2(){
    return view('produtos');
}

}
