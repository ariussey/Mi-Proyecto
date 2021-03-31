<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NosotroController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ServiceController;
use App\Http\Livewire\Contactanos;

Route::get('/', HomeController::class)->name('home');

//Route::get('/', [NoticiaController::class,'index'])->name('noticias.index');

Route::get('tutoriales', function() {
    return "Videos Tutoriales";
})->name('tutoriales.index');

Route::get('noticias',[NoticiaController::class,'index'])->name('noticias.index');
Route::get('noticias/{noticia}', [NoticiaController::class, 'show'])->name('noticias.show');

Route::get('category/{category}',[NoticiaController::class, 'category'])->name('noticias.category');
Route::get('tag/{tag}', [NoticiaController::class, 'tag'])->name('noticias.tag');

Route::get('services', [ServiceController::class, 'index'])->name('services.index');

Route::get('nosotros', [NosotroController::class, 'index'])->name('nosotros.index');
Route::get('nosotros/{nosotro}', [NosotroController::class, 'show'])->name('nosotros.show');

Route::get('contactanos', [Contactanos::class, 'index'])->name('contactanos.index');

Route::post('contactanos', [Contactanos::class, 'store'])->name('contactanos.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

