<?php

use Carbon\Carbon;
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
    \Illuminate\Support\Facades\Cache::set('hello', 'world!');
    return response()->json([
        'message' => 'App working fine !',
        'now' => Carbon::now()->format('Y-m-d h:i:s A'),
        'redis' => \Illuminate\Support\Facades\Cache::get('hello'),
    ]);
});


