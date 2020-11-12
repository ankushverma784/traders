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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('admin/dashboard');
})->name('admin');

Route::resource('products', ProductController::class);

Route::group(['as'=>'admin.','prefix'=>'/admin','middleware' => ['auth:sanctum', 'verified']], function () {
    
    Route::resource('customer', CustomerController::class);
    Route::get('payment', function () { return view('payment');  });
    
    Route::get('/suplier/transaction', function () { return view('admin/suplier/transaction'); });
    Route::resource('suplier', SuplierController::class);
    
    Route::resource('sale', SalesController::class);
    Route::resource('purchase', PurchaseController::class);
    // Route::get('managePurchase', function () { return view('admin/purchase.managePurchase');  });
    // Route::get('purchaseMaterial', function () { return view('admin/purchase.purchaseMaterial');  });

    // Route::get('/purchase/managePurchase', function () { return view('admin/purchase.managePurchase');  });

    Route::resource('tax', TaxController::class);
    Route::resource('challan', ChallanController::class);
    Route::resource('agreement', AgreementController::class);
    Route::resource('addVehicle', AddVehicleController::class);
    Route::resource('addPolicy', AddPolicyController::class);

   Route::get('profile','AdminController@profile')->name('profile');
   Route::resource('admin',AdminController::class);
   Route::POST('ajaxView', 'PurchaseController@ajaxView');



//    Route::get('updateProfile','AdminController@update')->name('update');




   
    // Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    
// Route::any('customer/payment', 'CustomerController@payment')->name('payment');
});
