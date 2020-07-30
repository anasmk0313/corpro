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


Route::get("/","HomeController@index");


Route::get('/about', "HomeController@about");
Route::get('/gallery', "HomeController@gallery");

Route::get("/products","HomeController@products");
Route::get("/color-selector","HomeController@colorselector");


Route::post("/enquiry","ProductsController@mail");
Route::post("/productsdetails","ProductsController@getproducts");

Route::GET("/productsdetailsby_id/{a_id}","ProductsController@getproductsby_id");

Route::GET("/products_details/{p_id}","ProductsController@getproduct_details");

Route::GET("/get_districts/{state_id}","ProductsController@get_districts");
Route::GET("/get_branches/{district_id}","ProductsController@get_branches");
Route::GET("/get_branch_details/{branch_id}","ProductsController@get_branch_details");


Route::GET("/index", "UserController@index");
Route::post("/login", "UserController@login");
Route::GET("/dash", function (){
    if(!session()->has('data')){
        return redirect('index');
    }else{
        return view('admin.dash');
    }
});

Route::get('/logout', function(){
    session()->flush('data');
    return redirect('index');
});

Route::resource("category", "CategoryController");
Route::resource("product", "AdminProductsController");
Route::resource("slider", "SliderController");
Route::resource("branch", "BranchController");



