<?php
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PelatihController;
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
    return view('welcome');
});

Route::get('/alll', [PlayerController::class,"index"]);
Route::get('/all', [PelatihController::class,"index"]);

Route::get('detail/{pemain}', [PlayerController::class, "show"]);
Route::get('edit/{pemain}', [PlayerController::class, "lihat"]);

Route::get('detil/{pelatih}', [PelatihController::class, "see"]);
Route::get('ubah/{pelatih}', [PelatihController::class, "ubah"]);