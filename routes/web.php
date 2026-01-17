<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;


Route::get('/', function () {
    return view('html101');
});

Route::get('/html101', function () {
    return view('html101');
});
Route::get('/study', function () {
    return view('html101');
});


Route::get('/viws2', function () {
    return view('myviews2');
});

Route::get('/mycontroller', [App\Http\Controllers\Mycontroller::class, 'index']);
Route::post('/mycontroller', [App\Http\Controllers\Mycontroller::class, 'process']);


// pokedex
Route::resource('/pokedexes', App\Http\Controllers\PokedexesController::class);




Route::get('/', function () {
    return view('template.default');
});
Route::post('/form-result', [FormController::class, 'result']) ->name('form.result');

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/flight', 'FilghtController@index');
});


