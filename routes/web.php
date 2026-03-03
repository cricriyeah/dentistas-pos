<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;

// Dashboard
Route::get('/', [DashboardController::class , 'index'])->name('dashboard');

// Pacientes
Route::get('/pacientes', [PacienteController::class , 'index'])->name('pacientes.index');
Route::get('/pacientes/{id}', [PacienteController::class , 'show'])->name('pacientes.show');

// Doctores
Route::get('/doctores', [DoctorController::class , 'index'])->name('doctores.index');
Route::get('/doctores/{id}', [DoctorController::class , 'show'])->name('doctores.show');

// Citas
Route::get('/citas', [CitaController::class , 'index'])->name('citas.index');

// Reportes
Route::get('/reportes', [ReporteController::class , 'index'])->name('reportes.index');

// Autenticación
Route::get('/login', fn() => view('auth.login'))->name('login');
Route::get('/registro', fn() => view('auth.register'))->name('registro');

// Servicios
Route::resource('servicios', ServicioController::class);

// Roles y Permisos
Route::resource('roles', RoleController::class)->except(['show']);
Route::resource('permisos', PermissionController::class)->parameters(['permisos' => 'permiso'])->except(['show']);
