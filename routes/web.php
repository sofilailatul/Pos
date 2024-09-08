<?php

use App\Http\Controllers\FoodBeverageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeautyHealthController;
use App\Http\Controllers\HomeCareController;
use App\Http\Controllers\BabyKidController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;
use Illuminate\Support\Facades\Route;

//Route Home View
Route::get('/', [HomeController::class, 'index']);

//Route to category
Route::prefix('category')->group(function (){
    Route::get('/foodBeverage', [FoodBeverageController::class, 'index']);
    Route::get('/beautyHealth', [BeautyHealthController::class, 'index']);
    Route::get('/homeCare', [HomeCareController::class, 'index']);
    Route::get('/babyKid', [BabyKidController::class, 'index']);
});

//Route user view
Route::get('/user/{id}/name/{name}', function ($id, $name) {
    return '<strong>User Profile</strong> <br> ID :' . $id . '<br> Nama: ' . $name;
});

// Route Penjualan view
Route::get('/penjualan', [PenjualanController::class, 'index']);
