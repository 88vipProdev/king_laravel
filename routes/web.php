<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\NewController;
use App\Http\Controllers\admin\pageController;
use App\Http\Controllers\user;
use App\Http\Controllers\user\ShowPageController;
use App\Http\Controllers\admin\productController;
use App\Http\Controllers\user\ShowTourController;
use App\Http\Controllers\admin\ShowProductController;
use App\Http\Controllers\admin\showCategoriesController;
use App\Http\Controllers\admin\detailController;
use App\Http\Controllers\user\cartController;
use App\Http\Controllers\user\orderController;
use App\Http\Controllers\admin\AdminHomeController;






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
            Route::prefix("user")->name("user.")->group(function () {

                Route::group(["middleware"=>"checklogin"],function(){

                    
                    Route::get("showPage",[ShowPageController::class,"showPage"])->name("showPage");
                    Route::get("showTour" ,[ShowTourController::class, "showTour"])->name("showTour");
                    Route::post("add-to-cart{id}",[cartController::class ,"render" ])->name("addtocart");
                    Route::get("showCart" ,[cartController::class , "showCart"])->name("showCart");
                    Route::post("update{id}" , [cartController::class , "updateCart"])->name("updateCart");    
                    Route::delete("remove{product_id}",[cartController::class , "remove"])->name("remove");
                    Route::get("store{id}",[orderController::class ,"store"])->name("store");
                    Route::post("orderTour{id}", [orderController::class , "oderTour"])->name("orderTour");                                                                 
                    
                });
                

                
            });
    
            Route::prefix('admin')->name('admin.')->group(function (){
                
                        Route::get("/", function(){
                            return view("login");
                        })->name("login");
                        Route::group(["middleware"=>"checkUser"], function (){
                      
                    
                        Route::get("home" ,[AdminHomeController::class, "home"])->name("home");
                
                        Route::get('page',[pageController::class,'page'])->name('page');
                        Route::post('NewPage',[pageController::class,'NewPage'])->name('NewPages');
                        Route::get('create',[productController ::class,'create'])->name('create');
                        Route::post('product',[productController ::class,'product'])->name('product');
                        Route::get('show',[ShowProductController::class,'show'])->name('show');
                        Route::get('edit/{id}',[productController :: class ,'edit'])->name('edit');
                        Route::post('update/{id}',[productController ::class,'update'])->name('update');
                        Route::delete('deleteTour/{id}', [ProductController::class, 'deleteTour'])->name('deleteTour');
                        Route::get("categories",[ProductController::class,"categories"])->name("categories");
                        Route::post("createCategories",[productController ::class,"createCategories"])->name("create");
                        Route::get("showCategories",[showCategoriesController::class,"showCategories"])->name("showCategories");  
                        Route::delete("deleteCategories/{id}",[productController::class ,"deleteCategories"])->name("deleteCategories");
                        Route::get("showPage",[pageController::class,"showPage"])->name("showPage");
                        Route::get("EditNew/{id}",[pageController::class , "EditNew"])->name("EditNew");
                        Route::post("EditPage/{id}",[pageController::class, "EditPage"])->name("EditPage");
                        Route::get("add",[detailController::class , "add"])->name("add");
                        Route::post("createDetail",[detailController::class,"createDetail"])->name("createDetail");
                        Route::get("Showdetail",[detailController::class,"Showdetail"])->name("Showdetail");
                        Route::get("update/{id}",[detailController::class , "update"])->name("update");
                        Route::post("detailUpdate/{id}",[detailController::class , "detailUpdate"])->name("detailUpdate");    
                        Route::delete("detailDelete{id}",[detailController::class ,"detailDelete"])->name("delete");
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
                
                });
            });

