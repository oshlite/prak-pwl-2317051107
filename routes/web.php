<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MataKuliahController;

/*
| Web Routes
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/daftaruser', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', function () {
    $kelas = collect([
        (object)['id' => 1, 'nama_kelas' => 'A'],
        (object)['id' => 2, 'nama_kelas' => 'B'],
        (object)['id' => 3, 'nama_kelas' => 'C'],
        (object)['id' => 4, 'nama_kelas' => 'D'],
    ]);

    return view('create_user', [
        'title' => 'Tambah User',
        'kelas' => $kelas
    ]);
})->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');

Route::get('/matakuliah', [MataKuliahController::class, 'index']);
Route::get('/matakuliah/create', [MataKuliahController::class, 'create'])->name('matakuliah.create');
Route::post('/matakuliah', [MataKuliahController::class, 'store'])->name('matakuliah.store');

// Preview route that renders list_user with sample data (doesn't use DB)
Route::get('/daftaruser', function () {
    $users = collect([
        (object)[ 'id' => 1, 'nama' => 'Krabby Patty', 'nim' => '2317051107', 'kelas' => (object)['nama_kelas' => 'A'] ],
        (object)[ 'id' => 2, 'nama' => 'Chum Bucket',   'nim' => '2317051107', 'kelas' => (object)['nama_kelas' => 'B'] ],
        (object)[ 'id' => 3, 'nama' => 'Kelp Shake','nim' => '2317051107', 'kelas' => (object)['nama_kelas' => 'C'] ],
        (object)[ 'id' => 4, 'nama' => 'Squidward','nim' => '2317051107', 'kelas' => (object)['nama_kelas' => 'D'] ],
    ]);

    return view('list_user', [
        'title' => 'Lists User',
        'users' => $users
    ]);
})->name('daftaruser.index');

// Preview route for create_user view with sample kelas data
Route::get('/preview-create-user', function () {
    $kelas = collect([
        (object)['id' => 1, 'nama_kelas' => 'A'],
        (object)['id' => 2, 'nama_kelas' => 'B'],
        (object)['id' => 3, 'nama_kelas' => 'C'],
        (object)['id' => 4, 'nama_kelas' => 'D'],
    ]);

    return view('create_user', [
        'title' => 'Create User',
        'kelas' => $kelas
    ]);
});
