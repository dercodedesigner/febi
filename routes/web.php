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
    return view('starter.dashboardv1');
})->name('dashboard');
// Route::view('/', 'starter')->name('starter');
Route::get('large-compact-sidebar/starter/blank-compact', function () {
    // set layout sesion(key)
    session(['layout' => 'compact']);
    return view('starter.blank-compact');
})->name('compact');

Route::get('large-sidebar/starter/blank-large', function () {
    // set layout sesion(key)
    session(['layout' => 'normal']);
    return view('starter.blank-large');
})->name('normal');

Route::get('horizontal-bar/starter/blank-horizontal', function () {
    // set layout sesion(key)
    session(['layout' => 'horizontal']);
    return view('starter.blank-horizontal');
})->name('horizontal');

Route::get('vertical/starter/blank-vertical', function () {
    // set layout sesion(key)
    session(['layout' => 'vertical']);
    return view('starter.blank-vertical');
})->name('vertical');

// sessions
Route::view('sessions/signIn', 'sessions.signIn')->name('signIn');
Route::view('sessions/signUp', 'sessions.signUp')->name('signUp');
Route::view('sessions/forgot', 'sessions.forgot')->name('forgot');
