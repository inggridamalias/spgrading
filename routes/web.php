<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/',function (){
    return view('welcome');
});
Route::get('/petunjuk',function (){
    return view('grading.petunjuk');
});
Route::get('/tentang',function (){
    return view('grading.tentang');
});
Route::get('part1',[\App\Http\Controllers\GradingController::class,'part1']);
Route::post('part2',[\App\Http\Controllers\GradingController::class,'part2']);
Route::post('part3',[\App\Http\Controllers\GradingController::class,'part3']);
Route::get('finish',[\App\Http\Controllers\GradingController::class,'finish']);

Route::redirect('/admin', '/admin/dashboard');
Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth',
], function () {
    Route::get('/laporan', [\App\Http\Controllers\AdminController::class,'laporan']);
    Route::get('/dashboard/get', [\App\Http\Controllers\AdminController::class,'grafik']);
    Route::get('/dashboard', [\App\Http\Controllers\AdminController::class,'dashboard'])->name('dashboard');
    Route::get('grade', [\App\Http\Controllers\Admin\GradeController::class,'grade']);
    Route::get('grade/create', [\App\Http\Controllers\Admin\GradeController::class,'create']);
    Route::post('grade/store', [\App\Http\Controllers\Admin\GradeController::class,'store']);
    Route::delete('grade/destroy/{id}', [\App\Http\Controllers\Admin\GradeController::class,'delete']);
    Route::get('grade/edit/{id}', [\App\Http\Controllers\Admin\GradeController::class,'edit']);
    Route::post('grade/update/{id}',[\App\Http\Controllers\Admin\GradeController::class,'update']);

    Route::get('ciri-fisik', [\App\Http\Controllers\Admin\CiriFisikController::class,'index']);
    Route::get('ciri-fisik/create', [\App\Http\Controllers\Admin\CiriFisikController::class,'create']);
    Route::post('ciri-fisik/store', [\App\Http\Controllers\Admin\CiriFisikController::class,'store']);
    Route::get('ciri-fisik/edit/{id}', [\App\Http\Controllers\Admin\CiriFisikController::class,'edit']);
    Route::post('ciri-fisik/update/{id}',[\App\Http\Controllers\Admin\CiriFisikController::class,'update']);
    Route::delete('ciri-fisik/destroy/{id}', [\App\Http\Controllers\Admin\CiriFisikController::class,'delete']);

    Route::get('detail-ciri-fisik', [\App\Http\Controllers\Admin\DetailCiriFisikController::class,'index']);
    Route::get('detail-ciri-fisik/create', [\App\Http\Controllers\Admin\DetailCiriFisikController::class,'create']);
    Route::post('detail-ciri-fisik/store', [\App\Http\Controllers\Admin\DetailCiriFisikController::class,'store']);
    Route::get('detail-ciri-fisik/edit/{id}', [\App\Http\Controllers\Admin\DetailCiriFisikController::class,'edit']);
    Route::post('detail-ciri-fisik/update/{id}',[\App\Http\Controllers\Admin\DetailCiriFisikController::class,'update']);
    Route::delete('detail-ciri-fisik/destroy/{id}', [\App\Http\Controllers\Admin\DetailCiriFisikController::class,'delete']);


});
require __DIR__.'/auth.php';
