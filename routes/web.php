<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get("/team", function(){
    return view("team");
});

Route::get("/doc", function(){
    return view("doc");
});

Route::get("/doc/category/{category_slug}", function($category_slug){
    return view("doc",["category_slug"=>$category_slug]);
});

Route::get("/blog", function(){
    return view("blog");
});
