<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatoController;


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

Route :: get('/',[CandidatoController::class,'index'])->name('candidato.mostrar');


Route :: get('/create',[CandidatoController::class,'create'])->name('candidato.crear');
Route :: post('/',[CandidatoController::class,'store'])->name('candidato.store');
Route :: get('/edit/{id}',[CandidatoController::class,'edit'])->name('candidato.editar');
Route :: delete('/delete/{id}',[CandidatoController::class,'destroy'])->name('candidato.delete');
Route :: put('/update/{id}',[CandidatoController::class,'update'])->name('candidato.update');


