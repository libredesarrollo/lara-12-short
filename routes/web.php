<?php

use App\Http\Controllers\Dashboard\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/contact', function () {
//     return view('contact',['name' => 'Andres']);
// });
// Route::get('/contact/{name?}', function ($name2 = 'juan') {
// Route::get('/contact/{name?}', function (?string $name2 = 'juan') {
Route::get('/contact/{name?}', function (?string $name = null) {
    // return view('contact',['name' => $name ?? 'hola']);
    $dbdata = ['asas'];
    $dbdata2 = ['asas'];
    // return view('contact',['name' => $name ?? 'hola', 'dbdata' => $dbdata,, 'dbdata2' => $dbdata2]);
    return view('contact', compact('name', 'dbdata', 'dbdata2'));
})->name('w.list.post');

// Route::post('test/post',[PostController::class, 'create']);

Route::resource('post', PostController::class);
