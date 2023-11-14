<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;



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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/greeting/{nombre?}', function ($nombre="alexis") {
    return view('ejemplo',['nombre' => $nombre]);
});

Route::get('/saludo/{nombre}/{apellido?}', function ($nombre, $apellido="") {
    return 'Hola '.$nombre. ' '.$apellido;
}) ->where(['nombre'=>'[a-z]+', 'apellido'=>'[a-z]+']);

Route::get('/suma/{n1}/{n2}', function ($n1,$n2) {
    return 'El resultado es: '.$n1+$n2;
}) ->where(['n1'=>'[0-9]+', 'n2'=>'[0-9]+']);
Route::get('/resta/{n1}/{n2}', function ($n1,$n2) {
    return 'El resultado es: '.$n1-$n2;
}) ->where(['n1'=>'[0-9]+', 'n2'=>'[0-9]+']);
Route::get('/multiplicacion/{n1}/{n2}', function ($n1,$n2) {
    return 'El resultado es: '.$n1*$n2;
}) ->where(['n1'=>'[0-9]+', 'n2'=>'[0-9]+']);
Route::get('/division/{n1}/{n2}', function ($n1,$n2) {
    return 'El resultado es: '.$n1/$n2;
}) ->where(['n1'=>'[0-9]+', 'n2'=>'[0-9]+']);

Route::get('/cars', [CarController::class, 'index']);
Route::get('/cars/{id}', [CarController::class, 'show']);


