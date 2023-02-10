<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonesController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pokemones', function () {
    return view('pokemones.index');
});

Route:: post('pokemones/store',[PokemonesController::class,'store']);
Route:: get('pokemones/index',[PokemonesController::class,'create']);

Route:: resource('pokemones',PokemonesController::class);