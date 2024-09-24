<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ConsultController;
use App\Http\Controllers\AnaliyzeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashlayoutController;
use App\Http\Controllers\ContactDetailsController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\InsertProductController;
use App\Http\Controllers\ManageProductController;
use App\Http\Controllers\UpdateProductController;

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
 
//Auth
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Update User
Route::POST("/UpdateProfile/{record}",[UpdateController::class,"UserProfileEditPost"]);

//Update Product
Route::POST("/updateproductpost/{record}",[UpdateProductController::class,"updateproduct"]);

//Clinet Side
Route::get('/layout', [LayoutController::class, 'layoutfun']);
Route::get('/about', [AboutController::class, 'aboutfun']);
Route::get('/contact',[ContactController::class,'contactfun']);

//Shop
Route::get('/shop',[ShopController::class,'shopfun']);
Route::get('/shop-layout',[ShopController::class,'shoplayoutfun']);

//Dashboard
Route::get('/dash-layout',[DashlayoutController::class,'dashlayoutfun'])->middleware('isadmin');
Route::get('/dashboard',[DashboardController::class,'dasboardfun'])->middleware('isadmin');
Route::get('/contact-details',[ContactDetailsController::class,'condetailsfun'])->middleware('isadmin');
Route::get('/user-update',[UpdateController::class,'updatefun'])->middleware('isadmin');
Route::get('/Insert-Product',[InsertProductController::class,'insertprofun'])->middleware('isadmin');
Route::get('/manage-product',[ManageProductController::class,'manageprofun'])->middleware('isadmin');
Route::get('/update-product/{id}',[UpdateProductController::class,'updateprofun'])->middleware('isadmin');

//Consult
Route::get('/consult', [ConsultController::class, 'consultfun']);
Route::get('/analyze',[AnaliyzeController::class,'analyzefun']);

//Analiyze Data 
Route::post('/AnalizeData',[ConsultController::class,'AnlayizeData'])->middleware("auth");

//insert Contact Us
Route::post('/insert-contact',[ContactDetailsController::class,'contactinsert']);

//insert Products
Route::post('/insert-Product',[InsertProductController::class,'productinsert']);

//Delete Product
Route::get('/deleteproduct{id}',[ManageProductController::class,'prodeletefun']);

//Delete User
Route::get('/deleteuser{id}',[DashboardController::class,'userdeletefun']);

//Delete Contact
Route::get('/delete{id}',[ContactDetailsController::class,'deletefun']);

//PDF
Route::get('/DynamicData/{data?}',[ConsultController::class,'DynamicData'])->name('pdf.data');

//Email
Route::post('/email',[AnaliyzeController::class,'emailfun']);

// Search
Route::get("/getdataproducts/{input}", [ShopController::class, "shopsearch"])->name('product.search');
Route::get("/getdatauser/{input}", [DashboardController::class, "usersearch"])->name('user.search');
// Route for searching contacts by input
Route::get('/getdatacontact/{input}', [ContactDetailsController::class, 'contactsearch']);

// Route for fetching all contacts when search input is empty
Route::get('/getdatacontacts', [ContactDetailsController::class, 'getAllContacts']);

Route::get("/getdatacontact/{input}", [ManageProductController::class, "managesearch"])->name('manage.search');

// Get all data
Route::get("/getalldata", [ShopController::class, "getalldata"])->name('product.getalldata');
Route::get("/getalldatauser", [DashboardController::class, "getalldatauser"])->name('user.getalldata');
Route::get("/getalldatacontact", [ContactDetailsController::class, "getalldatacontact"])->name('contact.getalldata');
Route::get("/getalldatamanage", [ManageProductController::class, "getalldatamanage"])->name('manage.getalldata');
