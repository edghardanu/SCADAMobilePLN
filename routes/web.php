<?php

use App\Http\Controllers\backend\TablesController;
use Illuminate\Support\Facades\Auth;
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
    return view('/welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//User Management

Route::get('/all-user', [App\Http\Controllers\backend\UserController::class, 'AllUser'])->name('alluser');
Route::get('/add-user-index', [App\Http\Controllers\backend\UserController::class, 'AddUserIndex'])->name('AddUserIndex');
Route::post('/insert-user', [App\Http\Controllers\backend\UserController::class, 'InsertUser'])->name('InsertUser');
Route::get('/edit-user/{id}', [App\Http\Controllers\backend\UserController::class, 'EditUser'])->name('Edituser');
Route::post('/update-user/{id}', [App\Http\Controllers\backend\UserController::class, 'UpdateUser'])->name('UpdateUser');
Route::get('/delete-user/{id}', [App\Http\Controllers\backend\UserController::class, 'DeleteUser'])->name('DeleteUser');

//Gardu Induk
Route::get('/rekap-garduinduk', [App\Http\Controllers\backend\TablesController::class, 'RekapGarduInduk'])->name('RekapGarduInduk');
Route::get('/rekap-garduinduk-add', [App\Http\Controllers\backend\TablesController::class, 'RekapGarduIndukAdd'])->name('RekapGarduIndukAdd');
Route::post('/rekap-garduinduk', [App\Http\Controllers\backend\TablesController::class, 'RekapGarduIndukAddProcess'])->name('RekapGarduIndukAddProcess');
Route::get('/rekap-garduinduk-edit/{id}', [App\Http\Controllers\backend\TablesController::class, 'RekapGarduIndukEdit'])->name('RekapGarduIndukEdit');
Route::patch('/rekap-garduinduk/{id}', [App\Http\Controllers\backend\TablesController::class, 'RekapGarduIndukEditProcess'])->name('RekapGarduIndukEditProcess');
Route::get('/rekap-garduinduk/{id}', [App\Http\Controllers\backend\TablesController::class, 'RekapGarduIndukDelete'])->name('RekapGarduIndukDelete');
Route::get('/rekap-garduinduk-view/{id}', [App\Http\Controllers\backend\TablesController::class, 'RekapGarduIndukView'])->name('RekapGarduIndukView');
// Route::get('/rekap-garduinduk', [App\Http\Controllers\backend\TablesController::class, 'RekapGarduIndukSearch'])->name('RekapGarduIndukSearch');


//Trafo
Route::get('/rekapan-trafo', [App\Http\Controllers\backend\TablesController::class, 'RekapanTrafo'])->name('RekapanTrafo');



//FGTM
Route::get('/fgtm', [App\Http\Controllers\backend\TablesController::class, 'FGTM'])->name('FGTM');
Route::get('/even&gangguan', [App\Http\Controllers\backend\TablesController::class, 'EvenGangguan'])->name('EvenGangguan');

//Material
Route::get('/material', [App\Http\Controllers\backend\TablesController::class, 'Material'])->name('Material');
Route::get('/daftar', [App\Http\Controllers\backend\TablesController::class, 'Daftar'])->name('Daftar');

//RekapKeypoint
Route::get('/keypoint', [App\Http\Controllers\backend\TablesController::class, 'Keypoint'])->name('Keypoint');
Route::get('/rekap-keypoint', [App\Http\Controllers\backend\TablesController::class, 'RekapKeypoint'])->name('RekapKeypoint');

//Operasi
Route::get('/operasi', [App\Http\Controllers\backend\TablesController::class, 'Operasi'])->name('Operasi');
Route::get('/rekap-manuver', [App\Http\Controllers\backend\TablesController::class, 'RekapManuver'])->name('RekapManuver');