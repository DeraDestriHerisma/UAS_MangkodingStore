<?php

//path controller
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Models\Contact;
use App\Models\Produk;

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

//Membuat Routing
Route::get('/', function () {
    $data = Produk::all();
    return view('welcome', compact('data'));
});


Route::get('/contactUser', [ContactController::class, 'index'])->name('contactUser');
Route::get('/LihatContact', [ContactController::class, 'LihatContact'])->name('LihatContact');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/insertdata', [ContactController::class, 'insertdata'])->name('insertdata');
Route::get('/tampilkandata/{id}', [ContactController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updateContact/{id}', [ContactController::class, 'updateContact'])->name('updateContact');
Route::get('/deleteContact/{id}', [ContactController::class, 'deleteContact'])->name('deleteContact');

Route::get('/beranda', [ProdukController::class, 'beranda'])->name('beranda');
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');

Route::get('/tambahProduk', [ProdukController::class, 'tambahProduk'])->name('tambahProduk');
Route::post('/insertProduk', [ProdukController::class, 'insertProduk'])->name('insertProduk');
Route::get('/editProduk/{id}', [ProdukController::class, 'editProduk'])->name('editProduk');
Route::post('/updateProduk/{id}', [ProdukController::class, 'updateProduk'])->name('updateProduk');
Route::get('/deleteProduk/{id}', [ProdukController::class, 'deleteProduk'])->name('deleteProduk');


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginProses', [LoginController::class, 'loginProses'])->name('loginProses');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registerUser', [LoginController::class, 'registerUser'])->name('registerUser');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
