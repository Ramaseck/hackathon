<?php

use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\CourController;
use App\Http\Controllers\ProfController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
//cour
Route::get('/cour',[CourController::class,'index']); 
Route::get("/ajout",[CourController::class,'create']);
Route::post("/ajout/traitement", [CourController::class,'store']);
//lists des cours pour dashbord

Auth::routes();
//proff

Route::get('/prof',[ProfController::class,'index']); 
Route::get("/ajout",[ProfController::class,'create']);
Route::post("/ajout/traitement", [ProfController::class,'store']);

//apprenant  
Route::get('/apprenant',[ApprenantController::class,'index']); 
Route::get("/ajout",[ApprenantController::class,'create']);
Route::post("/ajout/traitement", [ApprenantController::class,'store']);
 


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 // Route pour Adim 
 Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    // Page d'accueil de l'administrateur
    Route::get('/home', 'AdminController@index')->name('admin.home');

    // Ajout d'apprenants (exemple)
    Route::get('/ajouter-apprenant', 'AdminController@ajouterApprenantForm')->name('admin.ajouter.apprenant.form');
    Route::post('/ajouter-apprenant', 'AdminController@ajouterApprenant')->name('admin.ajouter.apprenant');
});

//Route pour apprennant
Route::middleware(['auth', 'apprenant', 'actif'])->prefix('apprenant')->group(function () {
    // Page d'accueil de l'apprenant
    Route::get('/home', 'ApprenantController@index')->name('apprenant.home');


});


Route::get('/admin/dashboard', 'AdminController@dashboard')->middleware('check.admin');

