<?php

use App\Http\Controllers\Adminusercontroller;
use App\Http\Controllers\Brandcontroller;
use App\Http\Controllers\Cardcontroller;
use App\Http\Controllers\Cate_categendercontroller;
use App\Http\Controllers\Cate_gioitinh;
use App\Http\Controllers\CateGendercontroller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Colercontroller;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Seachcontroller;

use App\Http\Controllers\Pagecontroller;
use App\Http\Controllers\Productcontroller;
use App\Http\Controllers\Rolecontroller;
use App\Http\Controllers\Sizecontroller;
use App\Http\Controllers\Usercontroller;
use App\Models\Size;
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
Route::get('/logup',[Adminusercontroller::class,"create"]);
Route::post('/logup',[Adminusercontroller::class,"store"]);
Route::get("/",[Controller::class,"home"]);
Route::get("/about",[Controller::class,"about"]);
Route::get("/shop",[Controller::class,"shop"]);
Route::get("/contact",[Controller::class,"contact"]);
Route::get("/page",[Controller::class,"page"]);
Route::get("/detail_product/{id}",[Controller::class,"detail_product"]);
Route::get("/detail_blog/{id}",[Controller::class,"detail_blog"]);
Route::get("/logup",[Controller::class,"logup"]);



Route::get("/myaccount",[Controller::class,"myaccount"]);
Route::get("/editmyacc",[Controller::class,"editmyacc"]);

//list theo category
Route::get("/shop/{id}",[Productcontroller::class,"show"]);

//đăng nhập
Route::get("/login",[Controller::class,"login"])->name('login');
Route::post("/login",[Logincontroller::class,"store"]);
Route::get("/logout",[Logincontroller::class,"show"]);


// Admin
Route::middleware(['auth'])->group(function (){
Route::get("/admin",[Controller::class,"admin"]);

Route::prefix("category")->group(function () {
//category
Route::get('/create_category',[CategoryController::class,"create"])->middleware("can:create_category");
Route::post('/create_category',[CategoryController::class,"store"])->middleware("can:create_category");
Route::get("/index_category",[CategoryController::class,"index"])->middleware("can:index_category");
Route::get("/delete_category/{id}",[CategoryController::class,"destroy"])->middleware("can:delete_category");
Route::get("/edit_category/{id}",[CategoryController::class,"edit"])->middleware("can:edit_category");
Route::post("/edit_category/{id}",[CategoryController::class,"update"])->middleware("can:edit_category");
});
//category_gender
Route::get("/create_category_gender",[CateGendercontroller::class,"create"])->middleware("can:index_category");
Route::post("/create_category_gender",[CateGendercontroller::class,"store"])->middleware("can:index_category");
Route::get("/index_category_gender",[CateGendercontroller::class,"index"])->middleware("can:index_category");
Route::get("/delete_category_gender/{id}",[CateGendercontroller::class,"destroy"])->middleware("can:index_category");
Route::get("/edit_category_gender/{id}",[CateGendercontroller::class,"edit"]);
Route::post("/edit_category_gender/{id}",[CateGendercontroller::class,"update"]);


//page
Route::get('/create_page',[Pagecontroller::class,"create"])->middleware("can:create_page");
Route::post('/create_page',[Pagecontroller::class,"store"])->middleware("can:create_page");
Route::get("/index_page",[Pagecontroller::class,"index"])->middleware("can:index_page");
Route::get("/delete_page/{id}",[Pagecontroller::class,"destroy"])->middleware("can:delete_page");
Route::get("/edit_page/{id}",[Pagecontroller::class,"edit"])->middleware("can:edit_page");
Route::post("/edit_page/{id}",[Pagecontroller::class,"update"])->middleware("can:edit_page");



//color
Route::get('/create_color',[Colercontroller::class,"create"]);
Route::post('/create_color',[Colercontroller::class,"store"]);
Route::get("/index_color",[Colercontroller::class,"index"]);
Route::get("/delete_color/{id}",[Colercontroller::class,"destroy"]);
Route::get("/edit_color/{id}",[Colercontroller::class,"edit"]);
Route::post("/edit_color/{id}",[Colercontroller::class,"update"]);


//size
Route::get('/create_size',[Sizecontroller::class,"create"]);
Route::post('/create_size',[Sizecontroller::class,"store"]);
Route::get("/index_size",[Sizecontroller::class,"index"]);
Route::get("/delete_size/{id}",[Sizecontroller::class,"destroy"]);
Route::get("/edit_size/{id}",[Sizecontroller::class,"edit"]);
Route::post("/edit_size/{id}",[Sizecontroller::class,"update"]);



//product
Route::get('/create_product',[Productcontroller::class,"create"])->middleware("can:create_product");
Route::post('/create_product',[Productcontroller::class,"store"])->middleware("can:create_product");
Route::get("/index_product",[Productcontroller::class,"index"])->middleware("can:index_product");
Route::get("/delete_product/{id}",[Productcontroller::class,"destroy"])->middleware("can:delete_product");
Route::get("/edit_product/{id}",[Productcontroller::class,"edit"])->middleware("can:edit_product");
Route::post("/edit_product/{id}",[Productcontroller::class,"update"])->middleware("can:edit_product");


//brand
Route::get('/create_brand',[Brandcontroller::class,"create"])->middleware("can:create_brand");
Route::post('/create_brand',[Brandcontroller::class,"store"])->middleware("can:create_brand");
Route::get("/index_brand",[Brandcontroller::class,"index"])->middleware("can:index_brand");
Route::get("/delete_brand/{id}",[Brandcontroller::class,"destroy"])->middleware("can:delete_brand");
Route::get("/edit_brand/{id}",[Brandcontroller::class,"edit"])->middleware("can:edit_brand");
Route::post("/edit_brand/{id}",[Brandcontroller::class,"update"])->middleware("can:edit_brand");


//category->category_gender
Route::get('/create_cate_categender',[Cate_categendercontroller::class,"create"]);
Route::post('/create_cate_categender',[Cate_categendercontroller::class,"store"]);
Route::get("/index_cate_categender",[Cate_categendercontroller::class,"index"]);
Route::get("/delete_cate_categender/{id}",[Cate_categendercontroller::class,"destroy"]);
Route::get("/edit_cate_categender/{id}",[Cate_categendercontroller::class,"edit"]);
Route::post("/edit_cate_categender/{id}",[Cate_categendercontroller::class,"update"]);


// // user

Route::get("/index_user",[Adminusercontroller::class,"index"])->middleware("can:index_user");
Route::get("/account_user",[Adminusercontroller::class,"indexaccount"])->middleware("can:account");

Route::get("/delete_user/{id}",[Adminusercontroller::class,"destroy"])->middleware("can:delete_user");
Route::get("/edit_user/{id}",[Adminusercontroller::class,"edit"])->middleware("can:edit_user");
Route::post("/edit_user/{id}",[Adminusercontroller::class,"update"])->middleware("can:edit_user");
Route::get("/editaccount/{id}",[Adminusercontroller::class,"editaccount"])->middleware("can:edit_user");
Route::post("/editaccount/{id}",[Adminusercontroller::class,"updateaccount"])->middleware("can:edit_user");
// user
// Route::get('/create_user',[Adminusercontroller::class,"create"]);
// Route::post('/create_user',[Adminusercontroller::class,"store"]);
// Route::get("/index_user",[Adminusercontroller::class,"index"]);
// Route::get("/delete_user/{id}",[Adminusercontroller::class,"destroy"]);
// Route::get("/edit_user/{id}",[Adminusercontroller::class,"edit"]);
// Route::post("/edit_user/{id}",[Adminusercontroller::class,"update"]);


// role
Route::get('/create_role',[Rolecontroller::class,"create"])->middleware("can:create_role");
Route::post('/create_role',[Rolecontroller::class,"store"])->middleware("can:create_role");
Route::get("/index_role",[Rolecontroller::class,"index"])->middleware("can:index_role");
Route::get("/delete_role/{id}",[Rolecontroller::class,"destroy"])->middleware("can:delete_role");
Route::get("/edit_role/{id}",[Rolecontroller::class,"edit"])->middleware("can:edit_role");
Route::post("/edit_role/{id}",[Rolecontroller::class,"update"])->middleware("can:edit_role");


//show pay
    Route::get("/index_paycart",[Cardcontroller::class,"showpaycart"]);
    Route::get("/deletepay/{id}",[Cardcontroller::class,"destroys"]);
    Route::get("/detailpay/{id}",[Cardcontroller::class,"detailpay"]);

});




Route::get("/card",[Cardcontroller::class,"show"]);
Route::post("/add_to_card",[Cardcontroller::class,"index"]);
Route::post("/update_to_card",[Cardcontroller::class,"update"]);
Route::get("/delete/{id}",[Cardcontroller::class,"delete"]);





Route::get("/pay",[Cardcontroller::class,"showpay"]);
Route::post('/pay',[Cardcontroller::class,"paycart"]);
// Route::get("/index_pay",[Cardcontroller::class,"index"]);
//Route::get("/delete_pay/{id}",[Cardcontroller::class,"destroy"]);
//Route::get("/edit_pay/{id}",[Cardcontroller::class,"edit"]);
// Route::post("/edit_pay/{id}",[Rolecontroller::class,"update"]);



Route::get('/seach',[Seachcontroller::class,"seach"]);






//user
// Route::get('/logup',[Usercontroller::class,"create"]);
// Route::post('/logup',[Usercontroller::class,"store"]);
// Route::get("/index_user",[Usercontroller::class,"index"]);
// Route::get("/delete_user/{id}",[Usercontroller::class,"destroy"]);
// Route::get("/edit_user/{id}",[Usercontroller::class,"edit"]);
// Route::post("/edit_user/{id}",[Usercontroller::class,"update"]);









