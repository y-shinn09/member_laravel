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

Route::get('/', function () {
    return view('welcome');
});

Route::get('member', [App\Http\Controllers\MemberController::class, 'index'])->name('member');
Route::get('member/hensyu', [App\Http\Controllers\MemberController::class, 'hensyu'])->name('hensyu');
Route::post('member/hensyu', [App\Http\Controllers\MemberController::class, 'koushin'])->name('koushin');
Route::get('member/ichi', [App\Http\Controllers\MemberController::class, 'ichi'])->name('ichi');
Route::post('member/ichi', [App\Http\Controllers\MemberController::class, 'ichi'])->name('ichi');
Route::delete('member/hensyu', [App\Http\Controllers\MemberController::class, 'delete'])->name('delete');
Route::post('member/touroku', [App\Http\Controllers\MemberController::class, 'touroku'])->name('touroku');