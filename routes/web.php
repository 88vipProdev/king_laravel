<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\NewController;
use App\Http\Controllers\admin\pageController;
use App\Http\Controllers\user;
use App\Http\Controllers\user\ShowPageController;
use App\Http\Controllers\admin\productController;
use App\Http\Controllers\user\ShowTourController;
use App\Http\Controllers\admin\ShowProductController;





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
    return view('welcome');
});
            Route::get('viewRegister' ,[AuthController::class,'ViewRegister'])->name('viewRegister');
            Route::post('register',[AuthController::class ,'register'])->name('register');
            Route::get('viewlogin',[AuthController::class,'viewlogin'])->name('viewlogin');
            Route::post('login',[AuthController::class,'login'])->name('login');
            Route::get('home',[HomeController::class,'home'])->name('home');


            Route::prefix("user")->name("user.")->group(function () {

                Route::group(["middleware"=>"checklogin"],function(){
                    Route::get("showPage",[ShowPageController::class,"showPage"])->name("showPage");
                    Route::get("showTour" ,[ShowTourController::class, "showTour"])->name("showTour");   
                });
                

                
            });


            Route::prefix('admin')->name('admin.')->group(function (){
                Route::group(["middleware"=>"checkUser"], function (){
                    
                        Route::get('index',[NewController ::class,'index'])->name('index');
                        Route::get('page',[pageController::class,'page'])->name('page');
                        Route::post('NewPage',[pageController::class,'NewPage'])->name('NewPages');
                        Route::get('create',[ProductController ::class,'create'])->name('create');
                        Route::post('product',[ProductController ::class,'product'])->name('product');
                        Route::get('show',[ShowProductController::class,'show'])->name('show');
                        Route::get('edit/{id}',[ProductController :: class ,'edit'])->name('edit');
                        route::post('update/{id}',[ProductController ::class,'update'])->name('update');

                
                });
            });


