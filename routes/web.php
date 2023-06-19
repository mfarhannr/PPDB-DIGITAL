<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Livewire\Pages\HomeComponent;
use App\Http\Livewire\Pages\NilaiComponent;
use App\Http\Livewire\Pages\BerkasComponent;
use App\Http\Livewire\Pages\FormulirComponent;
use App\Http\Livewire\Pages\Formulir\CreateComponent;
use App\Http\Livewire\Pages\Formulir\UpdateComponent;
use App\Http\Livewire\Pages\Nilai\CreateNilaiComponent;
use App\Http\Livewire\Pages\Nilai\UpdateNilaiComponent;
use App\Http\Livewire\Pages\Berkas\CreateBerkasComponent;
use App\Http\Livewire\Pages\Berkas\UpdateBerkasComponent;

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

// Route::get('/', function () {
//     return view('dashboard');
// });

// login & logout
Route::get('/login', function () {
    return view('user.login');
})->name('login');

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'CekRole:admin']], function () {
    Route::get("/dashboard", HomeComponent::class)->name("dashboard");
    Route::get("/formulir", FormulirComponent::class)->name("formulir");
    Route::get("/nilai", NilaiComponent::class)->name("nilai");
    Route::get("/berkas", BerkasComponent::class)->name("berkas");
});

Route::group(['middleware' => ['auth', 'CekRole:user']], function () {
    Route::get("/dashboard", HomeComponent::class)->name("dashboard");
    // Route::get("/formulir", FormulirComponent::class)->name("formulir");
    // Route::get("/berkas", BerkasComponent::class)->name("berkas");

    // formulir
    Route::get("/formulir/create", CreateComponent::class)->name("formulir.create");
    Route::get("/formulir/{formulirId}/update", UpdateComponent::class)->name("formulir.update");
    Route::delete("/formulir/{formulirId}/delete", FormulirComponent::class)->name("formulir.destroy");

    // nilai
    Route::get("/nilai/create", CreateNilaiComponent::class)->name("nilai.create");
    Route::get("/nilai/{nilaiId}/update", UpdateNilaiComponent::class)->name("nilai.update");
    Route::delete("/nilai/{nilaiId}/delete", NilaiComponent::class)->name("nilai.destroy");

    // berkas
    Route::get("/berkas/create", CreateBerkasComponent::class)->name("berkas.create");
    Route::get("/berkas/{berkasId}/update", UpdateBerkasComponent::class)->name("berkas.update");
    Route::delete("/berkas/{berkasId}/delete", BerkasComponent::class)->name("berkas.destroy");
});



