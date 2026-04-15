<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
Route::get('/home', fn() => response()->json(['Not logged in']));
Route::get('/webHome', function (){
    return redirect('/home');
});

Route::get('/hello/{name}', [HelloController::class, 'index']);
Route::get('/data', [HelloController::class, 'data']);
Route::get('/webpage', [HelloController::class, 'webpage']);
