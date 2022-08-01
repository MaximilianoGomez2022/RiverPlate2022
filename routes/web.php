<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\RegistrarseController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;


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

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
|
*/

Route::get('/', [HomeController::class, 'home']);


/*
|--------------------------------------------------------------------------
| Atuenticación
|--------------------------------------------------------------------------
|
*/

Route::get('iniciar-sesion', [AuthController::class, 'loginForm'])->name('auth.login.form');

Route::post('iniciar-sesion', [AuthController::class, 'loginEjecutar'])->name('auth.login.ejecutar');

Route::post('cerrar-sesion', [AuthController::class, 'logout'])->name('auth.logout');


/*
|--------------------------------------------------------------------------
| Tienda
|--------------------------------------------------------------------------
|
*/

Route::get('tienda', [TiendaController::class, 'index'])->name('tienda.index');

Route::get('tienda/agregar', [TiendaController::class, 'agregarForm'])->name('tienda.agregar.form')
->middleware(['auth']);

Route::post('/tienda/agregar', [TiendaController::class, 'agregarEjecutar'])->name('tienda.agregar.ejecutar')
->middleware(['auth']);

Route::post('tienda/{id}/eliminar', [TiendaController::class, 'Eliminar'])->name('tienda.eliminar')
->middleware(['auth']);

Route::get('tienda/{id}/editar', [TiendaController::class, 'editarForm'])->name('tienda.editar.form')
->middleware(['auth']);

Route::post('tienda/{id}/editar', [TiendaController::class, 'editarEjecutar'])->name('tienda.editar.ejecutar')
->middleware(['auth']);

Route::get('tienda/{id}', [TiendaController::class, 'VerDetalle'])->name('tienda.verDetalle');

Route::get('tienda/{categoria_id}/categoria', [TiendaController::class, 'categoria'])->name('tienda.categoria');

/*
|--------------------------------------------------------------------------
| Noticias
|--------------------------------------------------------------------------
|
*/

Route::get('noticias', [NoticiasController::class, 'index'])->name('noticias.index');

Route::get('noticias/publicar', [NoticiasController::class, 'publicarNoticia'])->name('noticias.publicar.form')
->middleware(['auth']);

Route::post('noticias/agregar', [NoticiasController::class, 'agregarEjecutar'])->name('noticias.agregar.ejecutar')
->middleware(['auth']);

Route::get('noticias/{id}/editar', [NoticiasController::class, 'editarNoticia'])->name('noticias.editar.noticia')
->middleware(['auth']);

Route::post('noticias/{id}/editar', [NoticiasController::class, 'editarEjecutar'])->name('noticias.editar.ejecutar')
->middleware(['auth']);

Route::post('noticias/{id}/eliminar', [NoticiasController::class, 'eliminar'])->name('noticias.eliminar')
->middleware(['auth']);

Route::get('noticias/{id}', [NoticiasController::class, 'VerNoticia'])->name('noticias.ver.noticia');

Route::get('/panel/dashboard', [PanelController::class, 'dashboard']);

/*
|--------------------------------------------------------------------------
| Registrarse
|--------------------------------------------------------------------------
|
*/

Route::get('registrarse', [RegistrarseController::class, 'index'])->name('registrarse.form');

Route::post('registrarse/agregar', [RegistrarseController::class, 'agregarUsuario'])->name('registrarse.agregar');

/*
|--------------------------------------------------------------------------
| Usuarios
|--------------------------------------------------------------------------
|
*/

Route::get('usuarios', [UsuariosController::class, 'index'])->name('usuarios.index')
->middleware(['auth']);

Route::post('usuarios/{id}/eliminar', [UsuariosController::class, 'eliminar'])->name('usuarios.eliminar')
->middleware(['auth']);



