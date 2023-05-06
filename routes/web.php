<?php

use App\Http\Controllers\DatanasabahController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('landing');
});

Route::get('/signin', [DatanasabahController::class, 'signin'])->name('signin');

Route::get('/dashboardadmin', [DatanasabahController::class, 'dashboardadmin'])->name('dashboardadmin');

Route::get('/datanasabah', [DatanasabahController::class, 'index'])->name('datanasabah');

Route::get('/tambahdata', [DatanasabahController::class, 'tambahdata'])->name('tambahdata');
Route::post('/insertdata', [DatanasabahController::class, 'insertdata'])->name('insertdata');

Route::get('/tampildata/{id}', [DatanasabahController::class, 'tampildata'])->name('tampildata');
Route::post('/updatedata/{id}', [DatanasabahController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [DatanasabahController::class, 'delete'])->name('delete');


Route::get('/exportexcel', [DatanasabahController::class, 'exportexcel'])->name('exportexcel');
Route::post('/importexcel', [DatanasabahController::class, 'importexcel'])->name('importexcel');

Route::get('/dataonproces', [DatanasabahController::class, 'dataonproces'])->name('dataonproces');


Route::get('/viewsdata', [DatanasabahController::class, 'viewsdata'])->name('viewsdata');

// Route freshdata
Route::get('/oneextanded', [DatanasabahController::class, 'oneextanded'])->name('oneextanded');
Route::get('/twoextanded', [DatanasabahController::class, 'twoextanded'])->name('twoextanded');
Route::get('/assetptp', [DatanasabahController::class, 'assetptp'])->name('assetptp');
Route::get('/extandedptp', [DatanasabahController::class, 'extandedptp'])->name('extandedptp');
Route::get('/returnasset', [DatanasabahController::class, 'returnasset'])->name('returnasset');

//Route asset on maintenance
Route::get('/assetbpone', [DatanasabahController::class, 'assetbpone'])->name('assetbpone');
Route::get('/assetbptwo', [DatanasabahController::class, 'assetbptwo'])->name('assetbptwo');
Route::get('/currentassetwo', [DatanasabahController::class, 'currentassetwo'])->name('currentassetwo');

// Route Agent

Route::get('dashboard_agent', [DatanasabahController::class, 'dashboard_agent'])->name('dashboard_agent');
