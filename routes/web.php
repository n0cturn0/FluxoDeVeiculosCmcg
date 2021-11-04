<?php

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

//Route::get('/', function () {
 //   return view('welcome');
//});
Route::get('/', [App\Http\Controllers\UserController::class, 'login'])->name('login.page');
//NOVO USUARIO
Route::get('/cadastro', [App\Http\Controllers\UserController::class, 'novousuario'])->name('auth.user');

Route::post('/auth', [App\Http\Controllers\UserController::class, 'auth'])->name('auth.user');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//informações pessoais proprietário do veículo
Route::get('/lteadmin', [App\Http\Controllers\HomeController::class, 'lte'])->name('home');
//Cadastro de Veículos
Route::get('/veiculos', [App\Http\Controllers\HomeController::class, 'veiculos'])->name('veiculos');
//informacoes do aluno
Route::get('/aluno', [App\Http\Controllers\HomeController::class, 'aluno'])->name('aluno');
//inserindo dados do proprietario
Route::post('/inserir', [App\Http\Controllers\HomeController::class, 'inserir'])->name('inserir');
//Inserindo Veiculos
Route::post('/insereveiculo', [App\Http\Controllers\HomeController::class, 'inserir_veiculo'])->name('insereveiculo');
/*
Route::middleware(['admin'])->group(function () {
    Route::get('/admin', function () {
       dd('Voce e admin');
    });

});
*/
