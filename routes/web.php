<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorPaginas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');}) ->name('routeHome');


Route::view('/home', 'home')->name('routeHome');
Route::view('/ingresar', 'ingresar')->name('routeIngresar');
Route::view('/recuerdos', 'recuerdos')->name('routeRecuerdos');


Route::get('/ingresar',function(){
    return "Aquí ingreso mis recuerdos";
});

Route::get('/ingresar/{name}', function($name){
    return "Ruta para Ingresar Recuerdos $name";
});


Route::get('/recuerdos/{nombre?}', ['as' => 'NRecuerdos', function($nombre='Invitado'){
    $arrNombres = ['Luis', 'Carlos', 'Karla'];
    return view('recuerdos', compact('nombre', 'arrNombres'));
}]);

*/

//App\Http\Controllers\ControladorPaginas
//Route::get('/', ['as' =>'NHome', 'uses' => '@home']);
//Route::get('ingresar', ['as' =>'NIngresar', 'uses' => 'App\Http\Controllers\ControladorPaginas@ingresar']);
//Route::get('recuerdos/{nombre?}', ['as' =>'NRecuerdos', 'uses' => 'App\Http\Controllers\ControladorPaginas@recuerdos']);


/*

Route::get('/', [ControladorPaginas::class,'home'])->name('NHome');
Route::get('ingresar', [ControladorPaginas::class,'ingresar'])->name('NIngresar');
Route::get('recuerdos/{nombre?}', [ControladorPaginas::class,'recuerdos'])->name('NRecuerdos');
*/



Route::get('/',[ControladorPaginas::class,'Fhome'])->name('NHome');
Route::get('/ingresar',[ControladorPaginas::class,'Fingresar'])->name('NIngresar');
Route::get('recuerdos/{nombre?}',[ControladorPaginas::class,'Frecuerdos'])->name('NRecuerdos');

Route::post('/guardarRecuerdos',[ControladorPaginas::class, 'procesarRecuerdos'])->name('NProcesar');














