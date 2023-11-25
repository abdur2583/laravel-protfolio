<?php

use Illuminate\Http\Request;
use App\Http\Controllers\PortfolioController;
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
Route::get("/home",[PortfolioController::class,'index']);
Route::get("/about",[PortfolioController::class,'about']);
Route::get("/blog",[PortfolioController::class,'blog']);
Route::get("/service",[PortfolioController::class,'services']);
Route::get("/contact",[PortfolioController::class,'contact']);
Route::get("/portfolio",[PortfolioController::class,'portfolio']);