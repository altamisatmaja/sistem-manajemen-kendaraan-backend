<?php

use App\Http\Controllers\Approver\DashboardApproverController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes for Approver
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth', 'role: Admin'])->group(function (){
    Route::get('approver/dashboard', [DashboardApproverController::class, 'index'])->name('approver.dashboard');
});
