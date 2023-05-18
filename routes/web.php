<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PeopleController;

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
Route::get('127.0.0.1/Jarecka/52645/people', [PeopleController::class, 'index'] );
Route::post('127.0.0.1/Jarecka/52645/people', [PeopleController::class, 'create'] );
Route::put('127.0.0.1/Jarecka/52645/people/{id}', [PeopleController::class, 'update'] );
Route::get('127.0.0.1/Jarecka/52645/people/{id}', [PeopleController::class, 'show'] );
Route::delete('127.0.0.1/Jarecka/52645/people/{id}', [PeopleController::class, 'delete'] );