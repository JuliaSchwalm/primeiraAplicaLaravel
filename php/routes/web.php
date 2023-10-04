<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/ID/{id}', function ($id) {
//     echo "o ID informado é " .$id;
//   //  return view('welcome');

// });

// Route::get('/{nome}', function ($nome) {
//     return view('home', ['nomePessoa' => $nome]);

// });

// Route::get('/{num}/{den}', function ($num, $den) {
//     if ($den!= 0){
//         $div = $num / $den;
//         echo "Divisão de ".$num." por ".$den." é ".$div;
//     } else {
//         echo"Não foi possível realizar a divisão!";
//     }

// });

Route::get('/{nome}', 'App\Http\Controllers\Controlador1@index');
Route::get('/teste/produtos', 'App\Http\Controllers\Controlador1@index2');