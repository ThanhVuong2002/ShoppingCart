<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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
    return view('welcome');
});

Route::get('/welcome', function () {
    return 'Chào mừng các bạn đã đến với PNV';
});

//Chạy controller
Route::get('/getIndex', [UserController::class, 'getIndex']);


//Tính tổng
Route::get('/sum', [App\Http\Controllers\SumController::class, 'index']);
Route::post('/sum', [App\Http\Controllers\SumController::class, 'Summ']);

//AreaOfShape
Route::get('/AreaOfShape', [App\Http\Controllers\AreaController::class, 'index']);
Route::post('/AreaOfShape', [App\Http\Controllers\AreaController::class, 'Area']);


//Singup

Route::get('signup',[App\Http\Controllers\SignupController::class ,'index']);
Route::post('signup',[App\Http\Controllers\SignupController::class ,'displayInfor']);

//
Route::post('/valida', [ValidationController::class, "validation"]);

Route::get('/addproduct',[ListProductsController::class,"showAddForm"])->name('addproduct');

Route::post('/addproduct',[ListProductsController::class,"creatSession"]);

Route::get('/showproducts',[ListProductsController::class,"showProduct"])->name('showproducts');

//sanpham
Route::get('trangchu', [PageController::class, "getIndex"]);

Route::get('/detail/{id}',[PageController::class,'getDetail']);
Route::get('/themgiohang/{id}', 'YourController@methodName')->name('themgiohang');
Route::get('/type/{id}',[PageController::class,'getLoaiSp']);

Route::get('Loai-san-pham/{type}',[
    'as'=>'Loaisanpham',
    'uses'=>'PageController@getLoaiSp'
]);

Route::get('/admin', [PageController::class, 'getIndexAdmin']);
Route::get('/export', [PageController::class, 'exportData'])->name('export');
Route::get('/add-product', [PageController::class, 'getAddProduct'])->name('add-product');

Route::get('/admin/add', [PageController::class, 'getAdminAdd'])->name('add-product');
Route::post('/admin-add-form', [PageController::class, 'postAdminAdd']);											

Route::get('/admin-edit-form/{id}', [PageController::class, 'getAdminEdit']);												
Route::post('/admin-edit',[PageController::class,'postAdminEdit']);

Route::post('/admin-delete/{id}', [PageController::class, 'postAdminDelete']);														





