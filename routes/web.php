 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

Route::get('/form', [DataController::class, 'form']);
Route::post('/proses', [DataController::class, 'proses']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'hello, Nabil';
});

Route::get('/users/{nabil}', function ($nabil) {
    return "Nama saya $nabil";
});


Route::get('/great/{nabil?}', function ($nabil = 'guest') {
    return "Nama saya $nabil";
});

Route::get('/profile', function () {
    return view ('profile');
});

Route::get('/about', function () {
    return view ('about', [ 'name' => 'Nabil']);
});

Route::get('/home', function () {
    return 'Halo, Ini adalah halaman Home';
})->name ('home.page');


use App\Http\Controllers\LaporanController;

Route::get('/', function () {
    return view('home'); // halaman utama
});

Route::get('/buatlaporan', [LaporanController::class, 'create'])->name('laporan.create');
Route::post('/laporan/store', [LaporanController::class, 'store'])->name('laporan.store');
Route::get('/laporansaya', [LaporanController::class, 'index'])->name('laporan.index');
