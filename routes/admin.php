<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NoticiaController;
use App\Http\Controllers\Admin\Portada_categoriaController;
use App\Http\Controllers\Admin\PortadaController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\administradorController;
use App\Http\Livewire\Admin\Intranet\Entidades\ShowEntidades;
use App\Http\Livewire\Admin\Intranet\Horarios\ShowHorarios;

Route::get('', [HomeController::class,'index'])->name('admin.home');

Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('admin.users');

Route::resource('categories', CategoryController::class)->names('admin.categories');

Route::resource('tags', TagController::class)->names('admin.tags');

Route::resource('services', ServiceController::class)->names('admin.services');

Route::resource('noticias', NoticiaController::class)->names('admin.noticias');

Route::resource('portadas/categorias', Portada_categoriaController::class)->names('admin.portadas.categorias');

Route::resource('portadas', PortadaController::class)->names('admin.portadas');

Route::get('intranet/entidades', [ShowEntidades::class, 'index'])->name('admin.intranet.entidades.index');

Route::get('intranet/horarios', [ShowHorarios::class, 'index'])->name('admin.intranet.horarios.index');



Route::resource('administrador', administradorController::class)->names('admin.administrador');