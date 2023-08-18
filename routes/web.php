<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::controller(App\Http\Controllers\ClienteController::class)->group(function () {
    // Cadastrar cliente
    Route::get('/cadastrar-cliente', 'create')->name('cadastrar-cliente');
    Route::post('/cadastrar-cliente', 'store');

    Route::get('/listar-cliente', 'list')->name("listar-cliente"); //listar cliente
    Route::get('/apagar-cliente/{id}', 'delete')->name("apagar-cliente"); // apagar cliente

    // Editar cliente
    Route::get('/editar-cliente/{id}', 'edit')->name("editar-cliente");
    Route::post('/editar-cliente', 'update')->name("editar-cliente");
});
