<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');
Route::get('/form', function () {
    return view('taskList');
})->name('taskList');

Route::get('/component', function () {
    $tasks = [
        ['name' => 'Task1'],
        ['name' => 'Task2'],
        ['name' => 'Task3'],
        ['name' => 'Task4'],
    ];
    return view('components.home', ['tasks' => $tasks]);
})->name('home');

// Xây dựng layout bằng tính kế thừa
Route::get('/ke-thua', function () {
    return view('child');
})->name('child');