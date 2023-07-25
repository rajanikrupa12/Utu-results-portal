<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StafsController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::view('/layout', 'authenticationValidateadmin')->name('admin.home');
Route::get('/layoutuser', [App\Http\Controllers\HomeController::class, 'userHome'])->name('user.home');
// Route::view('/layout', 'authenticationValidateUser')->name('user.home');

Route::view('/reset', 'auth.password.reset')->name('reset');

// Route::resource('staf','StafsController');

// Route::resource('staf', [App\Http\Controllers\StafsController::class,
//                         'except' => ['index','create', 'store', 'update', 'destroy']]);

Route::get('staf/index', [App\Http\Controllers\StafsController::class,'index'])->name('staf.index');
Route::get('staf/create', [App\Http\Controllers\StafsController::class,'create'])->name('staf.create');
Route::post('staf/store', [App\Http\Controllers\StafsController::class,'store'])->name('staf.store');
Route::get('staf/edit/{id}', [App\Http\Controllers\StafsController::class,'edit'])->name('staf.edit');
Route::put('staf/update/{id}', [App\Http\Controllers\StafsController::class,'update'])->name('staf.update');
Route::delete('staf/destroy/{id}', [App\Http\Controllers\StafsController::class,'destroy'])->name('staf.destroy');



Route::post('staf/pass/store', [App\Http\Controllers\StafsController::class,'store_pass'])->name('resetpassword');
// reset password
Route::get('staf/show/{id}', [App\Http\Controllers\StafsController::class,'show'])->name('staf.show');
// Route::post('staf/update', [App\Http\Controllers\StafsController::class,'update'])->name('staf.update');

Route::get('student_list',[App\Http\Controllers\StudentController::class,'index'])->name('student_list');

Route::get('export', [App\Http\Controllers\StudentController::class,'export'])->name('export');
Route::get('importExportView', [App\Http\Controllers\StudentController::class,'importExportView']);
Route::post('import', [App\Http\Controllers\StudentController::class,'import'])->name('import');
Route::get('delete-student/{id}', [App\Http\Controllers\StudentController::class,'destroy'])->name('delete-student');


