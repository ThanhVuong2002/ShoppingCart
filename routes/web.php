<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ListProductsController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return 'Chào mừng các bạn đã đến với PNV';
});

// Chạy controller
Route::get('/getIndex', [UserController::class, 'getIndex']);

// Tính tổng
Route::get('/sum', [App\Http\Controllers\SumController::class, 'index']);
Route::post('/sum', [App\Http\Controllers\SumController::class, 'Summ']);

// AreaOfShape
Route::get('/AreaOfShape', [App\Http\Controllers\AreaController::class, 'index']);
Route::post('/AreaOfShape', [App\Http\Controllers\AreaController::class, 'Area']);

// Signup
Route::get('/signup', [App\Http\Controllers\SignupController::class, 'index']);
Route::post('/signup', [App\Http\Controllers\SignupController::class, 'displayInfor']);

// Validation
Route::post('/valida', [App\Http\Controllers\ValidationController::class, 'validation']);

// Thêm sản phẩm
Route::get('/addproduct', [App\Http\Controllers\ListProductsController::class, 'showAddForm'])->name('addproduct');
Route::post('/addproduct', [App\Http\Controllers\ListProductsController::class, 'creatSession']);

// Hiển thị danh sách sản phẩm
Route::get('/showproducts', [App\Http\Controllers\ListProductsController::class, 'showProduct'])->name('showproducts');

// Trang chủ
Route::get('/trangchu', [PageController::class, 'getIndex'])->name('trangchu');

// Loại sản phẩm
Route::get('/loaisanpham/{id}', [PageController::class, 'getLoaiSp'])->name('loaisanpham');

// Chi tiết sản phẩm
Route::get('/detail/{id}', [PageController::class, 'getDetail']);

// Thêm vào giỏ hàng
Route::get('/themgiohang/{id}', [YourController::class, 'methodName'])->name('themgiohang');

// Loại sản phẩm
Route::get('/loai-san-pham/{id}', [PageController::class, 'getLoaiSp'])->name('loai-san-pham');

// Admin
Route::get('/admin', [PageController::class, 'getIndexAdmin']);
Route::get('/export', [PageController::class, 'exportData'])->name('export');
Route::get('/add-product', [PageController::class, 'getAddProduct'])->name('add-product');
Route::get('/admin/add', [PageController::class, 'getAdminAdd'])->name('admin-add');
Route::post('/admin-add-form', [PageController::class, 'postAdminAdd']);
Route::get('/admin-edit-form/{id}', [PageController::class, 'getAdminEdit']);
Route::post('/admin-edit', [PageController::class, 'postAdminEdit']);
Route::post('/admin-delete/{id}', [PageController::class, 'postAdminDelete']);

// Đăng ký và đăng nhập
Route::get('/register', function () {
    return view('users.register');
});
Route::post('/register', [UserController::class, 'Register']);
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'postLogin'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

// Thêm vào giỏ hàng
Route::get('add-to-cart/{id}', [PageController::class, 'getAddToCart'])->name('themgiohang');
Route::get('del-cart/{id}', [PageController::class, 'getDelItemCart'])->name('xoagiohang');

// ----------------- CHECKOUT ---------------
Route::get('check-out', [PageController::class, 'getCheckout'])->name('dathang');
Route::post('check-out', [PageController::class, 'postCheckout'])->name('dathang');

// Lazada

