<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GingaController;

Route::get('/',function(){
    return "Bora codar!";
});




// Route::get('/', [GingaController::class, 'index']);
// Route::post('ginga',[GingaController::class, 'cadastro']);
