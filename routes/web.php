<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html101');
});


Route::get('/viws2', function () {
    return view('myviews2');
});

Route::get('/mycontroller', [App\Http\Controllers\Mycontroller::class, 'index']);
Route::post('/mycontroller', [App\Http\Controllers\Mycontroller::class, 'process']);


Route::get('/html101', function () {
    return view('html101');
});
Route::get('/study', function () {
    return view('html101');
});
