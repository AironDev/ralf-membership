<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembershipController;

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
    return view('index');
});

Route::get('/memberships/register', [ MembershipController::class, 'create']  )->name('memberships.create');
Route::post('/memberships', [ MembershipController::class, 'store']  )->name('memberships.store');
