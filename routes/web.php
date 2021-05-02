<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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


Route::get('/env', function () {
    return response()->json(['hoge' => env('APP_SERVICE'), 'env' => env('APP_ENV')]);
});

Route::get('/presignedIconUrl', function () {
    $url = Storage::disk('s3_icon')->temporaryUrl('portfolio/icon.jpeg', Carbon::now()->addMinutes(60));
    return response()->json(['url' => $url]);
});

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');