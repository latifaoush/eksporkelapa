<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController; // Tambahkan ini
use App\Http\Controllers\ListProductController;
use App\Http\Controllers\RegistrationController;

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

// Route::get('/welcome', function (){
//     return view('welcome');
// });

// Route::get('/user/{id}', function ($id){
//     return 'User dengan ID ' . $id;
// });

// Route::prefix('admin')->group(function (){
//     Route::get('/dashboard', function (){
//         return 'Admin Dashboard';
//     });

//     Route::get('/users', function () {
//         return 'Admin Users';
//     });
// });

// Route::get('/listbarang/{id}/{nama}', function($id, $nama){
//     return view('list_barang', compact('id', 'nama'));
// });

Route::get('/', function(){
    return view('home');
});

Route::get('dashboard', function(){
    return view('dashboard');
});

Route::get('login', function(){
    return view('login');
});




// Route::get('/listbarang', [ListBarangController::class, 'tampilkan']);

Route::get('/listproduct', [ListProductController::class, 'product']);

Route::get('/registration', [RegistrationController::class, 'registration']);

// Route::get('/', [HomeController::class, 'index']);

// Route::get('/contact', [HomeController::class, 'contact']);
