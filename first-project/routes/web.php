<?php

use App\Http\Controllers\JogosController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

//Route::get('/home', function () {
    //return view('welcome');
//});

//Route::view('/jogos', 'jogos');

// Route::get('/jogos', function(){
//     return "make it easy peasy";
// });

// Route::view('/jogos', 'jogos', ['name'=>'esse é uma variavel pela route']);
// Route::get('/jogos/{name}', function($name){
//     return view('jogos',['nomeJogo'=>$name]);
// });


// Route::get('/jogos/{name?}', function($name=null){
//        return view('jogos',['nomeJogo'=>$name]);
//      });
//FAZ COM QUE A PASSAGEM DO PARAMETRO SEJA OPSIONAL


// Route::get('/jogos/{name?}/{id?}', function($name=null, $id=null){
//     return view('jogos',['nomeJogo'=>$name, 'jogoid'=>$id]);
// })->where(['name'=>'[a-z]+', 'id'=>'[0-9]+']);

// Route::get('/jogos', [JogosController::class,'index']);

// Route::get('/home', function () {
//     return view('welcome');
// })->name('welcome-view');

Route::prefix('jogos')->group(function(){
    Route::get('/', [JogosController::class, 'index'])->name('jogos-index');
    Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');
    Route::post('/', [JogosController::class, 'store'])->name('jogos-store');
    Route::get('/{id}/edit', [JogosController::class, 'edit'])->where('id','[0-9]+')->name('jogos-edit');
    Route::put('/{id}', [JogosController::class, 'update'])->where('id','[0-9]+')->name('jogos-update');
    Route::delete('/{id}',[JogosController::class, 'destroy'])->where('id','[0-9]+')->name('jogos-destroy');
});
Route::fallback(function(){
    return "rota não encontrada";
});