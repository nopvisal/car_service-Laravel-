<?php

use App\Http\Controllers\Dashboard\CustomerController;
use App\Http\Controllers\Dashboard\productController;
use App\Http\Controllers\Dashboard\supplierController;
use App\Http\Controllers\Frontend\HomeFrontendController;
use App\Http\Controllers\Frontend\LinkController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\BranchController;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(HomeFrontendController::class)->group(function () {
    Route::get('/', 'homeFrontend');
});

Route::get('/home', [LinkController::class, 'index']);
Route::get('/contact', [LinkController::class, 'contact']);
Route::get('/aboutus', [LinkController::class, 'aboutus']);
Route::get('/service', [LinkController::class, 'service']);
Route::get('/booking', [LinkController::class, 'booking']);
Route::get('/team', [LinkController::class, 'team']);
Route::get('/testimonial', [LinkController::class, 'testimonial']);
Route::get('/404', [LinkController::class, 'P404']);
Route::get('/shop', [LinkController::class, 'shop']);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/dashboard', 'homeDashboard')->name('dashboard');

        // Include additional admin routes
        include __DIR__ . '/admin/user.php';    // Routes for user management
        include __DIR__ . '/admin/profile.php'; // Routes for profile management
    // Route::middleware(['auth','role:admin'])->group(function () {
      
        
    //     });
      
        
       

        // Other dashboard routes for `admin` role
        Route::get('dashboard/branch', [BranchController::class, 'branchDashboard']);
        Route::get('dashboard/customer', [CustomerController::class, 'customerDashboard']);
        Route::get('dashboard/product_type_1', [ProductController::class, 'productType1']);
        Route::get('dashboard/product_type_2', [ProductController::class, 'productType2']);
        Route::get('dashboard/product_type_3', [ProductController::class, 'productType3']);
        Route::get('dashboard/supplier', [SupplierController::class, 'supplier']);
    });

    // Apply permission-based middleware to allow only users with 'create user' permission to access create_user route
    Route::middleware('permission:create user')->group(function () {
        Route::get('/create_user', [UserController::class, 'createUserDashboard']);
    });

    Route::middleware(['role:user'])->group(function () {
        Route::get('/user-dashboard', [HomeController::class, 'userDashboard'])->name('user.dashboard');
    });

});




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__ . '/auth.php';
