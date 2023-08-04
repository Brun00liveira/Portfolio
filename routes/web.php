<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ExpController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\html\CarController;
use App\Http\Controllers\html\MuseuController;
use App\Http\Controllers\bootstrap\SpotifyController;
use App\Http\Controllers\bootstrap\FinansController;
use App\Http\Controllers\js\ImcController;
use App\Http\Controllers\laravel\ClientesController;
use App\Http\Controllers\php\CalculatorController;
use App\Http\Controllers\php\helpDeskController;

/*
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


// Portfolio
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('portfolio', [PortfolioController::class, 'index']);
Route::get('exp', [ExpController::class, 'index']);
Route::get('contact', [ContactController::class, 'index']);

//html
Route::get('museu', [MuseuController::class, 'index']);
Route::get('car', [CarController::class, 'index']);

//javascript
Route::get('javascript/imc', [ImcController::class, 'index']);
//bootstraps
Route::get('spotify', [SpotifyController::class, 'index']);
Route::get('finans', [FinansController::class, 'index']);

//crud
Route::resource('crud', clientesController::class);

Route::get('php/index', [CalculatorController::class, 'index']);
Route::get('php/calc', [CalculatorController::class, 'calculator']);
Route::get('php/currency', [CalculatorController::class, 'currency']);
Route::get('php/time', [CalculatorController::class, 'time']);
Route::get('php/weather', [CalculatorController::class, 'weather']);
Route::get('php/weight', [CalculatorController::class, 'weight']);

Route::get('php/abrirChamado', [helpDeskController::class, 'index']);
Route::get('php/home', [helpDeskController::class, 'home']);
Route::get('php/consultarChamado', [helpDeskController::class, 'consultar']);

Route::get('/visualizar-pdf', function () {
    $pdfPath = public_path('pdf/Curriculo.pdf');
    return response()->file($pdfPath);
})->name('visualizar.pdf');
