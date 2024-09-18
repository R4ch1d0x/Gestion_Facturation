<?php

use App\Http\Controllers\LineController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserMangementController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
});

Auth::routes(['register' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//client:

Route::get('/client',[ClientController::class,'getFromDataDB']);

Route::get('/ajouterClient',function(){
    return view('client/ajouterClient');
})->name('ajouter');

Route::post('/saveajouter',[ClientController::class,'insert']);

Route::get('/modif/{c}',[ClientController::class,'updateData'])->name('client.edit');

Route::put('/saveModif/{c}',[ClientController::class,'update'])->name('client.update');

Route::get('/suppriTout', [ClientController::class,'deletaDataTout']);

Route::get('/supprimer/{c}', [ClientController::class,'deletaData']);

Route::get('/afficherTout', [ClientController::class,'afficheDataTout']);

Route::get('/search', [ClientController::class,'searchData'])->name('find');

//facture:
Route::get('/facture',[FactureController::class,'getFromDataDB']);

Route::get('/ajouterFacture',function(){
    return view('facture/ajouterFacture');
})->name('ajouterFacture');

Route::post('/saveajouterFacture',[FactureController::class,'insertFacture'])->name('saveajouterFacture');

Route::get('/supprimerFacture/{c}', [FactureController::class,'deletaDataFacture']);

Route::get('/suppriToutFacture', [FactureController::class,'deletaDataToutFacture']);

Route::get('/afficherToutFacture', [FactureController::class,'afficheDataTouFacturet']);

Route::get('/searchFacture', [FactureController::class,'searchDataFacture'])->name('findFacture');

Route::get('/searchFactureClient', [FactureController::class,'searchDataClient'])->name('searchFactureClient');

Route::get('/filter',[FactureController::class,'filter']);

Route::get('/modifFacture/{f}',[FactureController::class,'updateDataFacture'])->name('client.edit');

Route::put('/saveModifFacture/{f}',[FactureController::class,'updateFacture'])->name('facture.update');

//line:

Route::post('/saveajouterLine/{facture_id}',[LineController::class,'insertline'])->name('saveajouterLine');

Route::get('/lineFacture/{id}',function($id){
    return view('facture/lineFacture',['facture_id' => $id]);
})->name('ajouterline');

//pdf

Route::get('create-pdf',[PDFController::class,'createPDF']);



Route::get('/pdf/{f}',[FactureController::class,'pdf']);
Route::get('/pdf/{c}',[FactureController::class,'pdf']);


/*Route::get('export-client-facture-form', function () {
    return view('facture.export');
});*/
Route::get('export-excel', [FactureController::class,'export'])->name('export-excel');


