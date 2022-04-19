<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome-breeze');
// });



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
Route::group(['middleware' => ['auth', 'active']], function () {
    Route::get('language_switch/{locale}', 'LanguageController@switchLanguage');
    Route::get('role/permission/{id}', 'RoleController@permission')->name('role.permission');
    Route::post('role/set_permission', 'RoleController@setPermission')->name('role.setPermission');
    Route::resource('role', 'RoleController');    
    Route::get('/', 'HomeController@index')->name('site-dashboard');
});

Route::resource('brand', BrandController::class)->except('create', 'show');

Route::resource('employee', EmployeeController::class)->except('create', 'show');

Route::resource('product-transfer', ProductTransferController::class);

Route::resource('product-sale', ProductSaleController::class);

Route::resource('supplier', SupplierController::class);

Route::resource('barcode', BarcodeController::class);

Route::resource('variant', VariantController::class);

Route::resource('unit', UnitController::class);

Route::resource('category', CategoryController::class)->except('create');

Route::resource('cash-register', CashRegisterController::class)->except('create');

Route::resource('ware-house', WareHouseController::class)->except('create');

Route::resource('bank', Setting\BankController::class)->except('create');

Route::resource('account', Setting\AccountController::class);

Route::resource('barcode-product', BarcodeProductController::class);

Route::resource('transfer', TransferController::class);

Route::resource('product', ProductController::class);

Route::resource('product-variant', ProductVariantController::class);

Route::resource('stock', Shop\StockController::class);

Route::resource('coupon', CouponController::class);

Route::resource('stock-user', StockUserController::class);

Route::resource('sale-status', Settings\SaleStatusController::class);

Route::resource('payment', Settings\PaymentController::class)->except('create', 'edit', 'show');

Route::resource('sale', Shop\SaleController::class);

Route::resource('customer', CustomerController::class);

Route::resource('customer-group', CustomerGroupController::class);

Route::resource('purchase', Shop\PurchaseController::class);

Route::resource('product-purchase', Shop\ProductPurchaseController::class);

Route::resource('general', Setting\GeneralController::class);

Route::resource('revenue', RevenueController::class);

Route::resource('product-batch', ProductBatchController::class);

Route::resource('product-return', Shop\ProductReturnController::class);

Route::resource('return-item', Shop\ReturnItemController::class)->except('index', 'create');

Route::resource('stock-in-purchased', Shop\StockInPurchasedController::class)->except('create');

Route::resource('payroll', PayrollController::class)->except('create');
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

