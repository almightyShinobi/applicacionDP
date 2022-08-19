<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserSettingsController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/homePaula', [App\Http\Controllers\HomePaula::class, 'index'])->name('homePaula');

Route::get('/NewPassword',  [UserSettingsController::class,'NewPassword'])->name('NewPassword')->middleware('auth');
Route::post('/change/password',  [UserSettingsController::class,'changePassword'])->name('changePassword');

Route::get('/email',  [UserSettingController::class,'email'])->name('email')->middleware('auth');
Route::post('/change/email',  [UserSettingController::class,'changeEmail'])->name('changeEmail');



// rutas editar perfil
/* Route::resource('miperfil', 'App\Http\Controllers\editarController'); */

/* editar opcion 2 */


