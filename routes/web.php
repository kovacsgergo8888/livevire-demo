<?php

use App\Http\Livewire\StarWars;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Counter;
use App\Http\Livewire\Greetings;

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

Route::get('/', Counter::class);
Route::get('/input', Greetings::class);

Route::get('/star-wars', StarWars::class);
