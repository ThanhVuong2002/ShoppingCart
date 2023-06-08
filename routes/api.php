<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\LazadaController;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------  
| API Routes
|--------------------------------------------------------------------------  
|
| Here is where you can register API routes for your application. These  
| routes are loaded by the RouteServiceProvider within a group which  
| is assigned the "api" middleware group. Enjoy building your API!  
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




// APIController routes
Route::get('/get-product', [APIController::class, 'getProducts']);
Route::get('/get-product/{id}', [APIController::class, 'getOneProduct']);
Route::post('/add-product', [APIController::class, 'addProduct']);
Route::delete('/delete-product/{id}', [APIController::class, 'deleteProduct']);
Route::put('/edit-product/{id}', [APIController::class, 'editProduct']);
Route::post('/upload-image', [APIController::class, 'uploadImage']);


// LazadaController routes
Route::get('/lazada/get-product', [LazadaController::class, 'getProducts']);
Route::get('/lazada/get-product/{id}', [LazadaController::class, 'getOneProduct']);
Route::post('/lazada/add-product', [LazadaController::class, 'addProduct']);
Route::delete('/lazada/delete-product/{id}', [LazadaController::class, 'deleteProduct']);
Route::put('/lazada/edit-product/{id}', [LazadaController::class, 'editProduct']);
Route::post('/lazada/upload-image', [LazadaController::class, 'uploadImage']);
