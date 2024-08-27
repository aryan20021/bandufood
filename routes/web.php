<?php

use App\Http\Controllers\LoginController;
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

Route::controller(LoginController::class)->group(function(){
    Route::get('/','home')->name('home');
    Route::get('/login', 'AdminloginView')->name('AdminLoginview');
    Route::get('/login-as', 'loginoptionView')->name('Loginoptionview');
    Route::get('/login-as-farmer', 'farmerloginView')->name('farmerloginview');
    Route::get('/login-as-customer', 'customerloginView')->name('customerloginview');
    Route::get('/signup-as-customer', 'customersignupView')->name('customersignupview');
    Route::get('/signup-as-farmer', 'farmersignupView')->name('farmersignupview');
    //for customer registration and login
    Route::post('/registerascustomer', 'customerRegister')->name('customer.register');
    Route::post('/logincustomer', 'customerLogin')->name('customer.login');

    //for farmer registration and login

    Route::post('/regiterasfarmer', 'farmerRegistration')->name('farmer.register');
    Route::post('/loginasfarmer', 'farmerLogin')->name('farmer.login');

    Route::get('/logout', 'logout')->name('logout');











});
