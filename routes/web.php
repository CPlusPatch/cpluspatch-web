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
/* Route::get("/socials", function() {
    return view("socials");
}); */
Route::get("/projects", function() {
    return view("projects");
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get("/account/settings", function() {
    if (Auth::check()) {
        return view("account.profile-settings");
    }
    return abort(401);
});
Route::post("/account/change-avatar", [UserAvatarController::class, "update"]);

Route::prefix('cdn')->group(function () {
    Route::post('/upload', [FilepondController::class, 'upload'])->name('filepond.upload');
    Route::delete('/delete', [FilepondController::class, 'delete'])->name('filepond.delete');
});

require __DIR__.'/auth.php';
