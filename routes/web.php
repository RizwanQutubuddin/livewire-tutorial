<?php

use App\Http\Livewire\Students;
use App\Http\Livewire\Uploads;
use App\Http\Livewire\Images;
use Illuminate\Support\Facades\Route;


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

Route::view('user', 'user');
// Route::livewire('user-list', 'user-list-db');
Route::get('/students', Students::class);
Route::get('/uploads', Uploads::class);
Route::get('/upload-images', Images::class);


