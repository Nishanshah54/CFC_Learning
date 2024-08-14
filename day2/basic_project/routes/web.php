<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FristController;


Route::get('/first', [FristController::class,'index']);
Route::get("/second",[FristController::class,'second']);

Route::get('/', function ()
 {
    return view('welcome');
});
