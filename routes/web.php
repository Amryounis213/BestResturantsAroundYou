<?php


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

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MealController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\RestaurantController;
use App\Http\Controllers\Front\FrontEndController;
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


Route::group(['prefix' => 'admin'], function () {
    //Route::view('/', 'admin.index')->name('AdminDashboard');
    Route::resource('/', DashboardController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('restaurants', RestaurantController::class);
    Route::resource('meals', MealController::class);
    Route::resource('offers', OfferController::class);
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('headerposts', headerPostController::class);
    Route::resource('tags', TagController::class);
});


Route::middleware(['auth'])->group( function () {
    Route::get('/', function () {
        return view('website.index');
    })->name('index');
    

    Route::get('resturant/{id}' , [FrontEndController::class , 'ShowProductsOfResturant'])->name('resturant.product');
    Route::get('meal/{id}' , [FrontEndController::class , 'ShowProduct'])->name('ShowProduct');
   Route::get('city/{id}' , [FrontEndController::class , 'ShowResturantsOfCity'])->name('city.resturants');
    Route::get('user/login' , function(){
        return view('website.login');
    });
});

require __DIR__.'/admin.php';



require __DIR__.'/auth.php';
