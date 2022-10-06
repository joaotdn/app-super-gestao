<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
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

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/sobre', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');

Route::get('/login', function() { return 'Login'; })->name('site.login');

Route::get(
    '/contato/{nome}/{id}',
    function (
        string $nome,
        int $id = 1
    ) {
        echo 'Parametro: ' . $nome . ' - ' . $id;
    }
)->where('id', '[0-9]+')->where('nome', '[A-Za-z]+');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function() { return 'Clientes'; });
    Route::get('/fornecedores', function() { return 'Fornecedores'; });
    Route::get('/produtos', function() { return 'Produtos'; });
});

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');

Route::fallback(function() {
    echo '404!!!';
});