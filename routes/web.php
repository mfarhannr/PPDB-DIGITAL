<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\HomeComponent;
use App\Http\Livewire\Pages\RoleComponent;
use App\Http\Livewire\Pages\FormulirComponent;
use App\Http\Livewire\Pages\PerusahaanComponent;
use App\Http\Livewire\Pages\Formulir\CreateComponent;
use App\Http\Livewire\Pages\Formulir\UpdateComponent;
use App\Http\Livewire\Pages\Pengguna\CreatePenggunaComponent;
use App\Http\Livewire\Pages\Pengguna\UpdatePenggunaComponent;
use App\Http\Livewire\Pages\PenggunaComponent;
use App\Http\Livewire\Pages\Role\CreateRoleComponent;
use App\Http\Livewire\Pages\Role\UpdateRoleComponent;

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

Route::get("/", HomeComponent::class)->name("dashboard");

Route::get("/formulir", FormulirComponent::class)->name("formulir");
Route::get("/formulir/create", CreateComponent::class)->name("formulir.create");
Route::get("/formulir/{formulirId}/update", UpdateComponent::class)->name("formulir.update");
Route::delete("/formulir/{formulirId}/delete", FormulirComponent::class)->name("formulir.destroy");

Route::get("/role", RoleComponent::class)->name("role");
Route::get("/role/create", CreateRoleComponent::class)->name("role.create");
Route::get("/role/{roleId}/update", UpdateRoleComponent::class)->name("role.update");
Route::delete("/role/{roleId}/delete", RoleComponent::class)->name("role.destroy");

Route::get("/pengguna", PenggunaComponent::class)->name("pengguna");
Route::get("/pengguna/create", CreatePenggunaComponent::class)->name("pengguna.create");
Route::get("/pengguna/{penggunaid}/update", UpdatePenggunaComponent::class)->name("pengguna.update");
Route::delete("/pengguna/{penggunaid}/delete", PenggunaComponent::class)->name("pengguna.destroy");
Route::get("/perusahaan", PerusahaanComponent::class)->name("perusahaan");
