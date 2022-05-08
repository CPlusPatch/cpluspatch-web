<?php

use App\Http\Controllers\UserAvatarController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Sopamo\LaravelFilepond\Http\Controllers\FilepondController;

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

Route::view("/privacy-policy", "privacy-policy");
Route::redirect("/discord", "https://discord.com/api/oauth2/authorize?client_id=930810596839030795&permissions=1237420731510&scope=bot%20applications.commands", 301);
