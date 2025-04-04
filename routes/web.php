<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\UserController;
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

Route::get('/', [Controller::class, "welcome"]);

Route::group([
    "prefix" => "users",
    "controller" => UserController::class
], function () {
    Route::get("/create", "createForm");

    Route::post("/create", "store")->name("users.store");

    Route::get("/list", "list")->name("users.list");

    Route::get("/update/{user}", "updateForm")->name("users.updateForm");
    Route::post("/update/{user}", "update")->name("users.update");
    
    Route::delete("/delete/{user}", "delete")->name("users.delete");
});

Route::group([
    "prefix" => "houses",
    "controller" => HouseController::class
], function () {
    Route::get("/list", "list")->name("houses.list");

    Route::get("/create", "createForm")->name("houses.createForm");

    Route::get("/update/{house}", "updateForm")->name("houses.updateForm");

    Route::post("/create", "store")->name("houses.store");
    Route::post("/update/{house}", "update")->name("houses.update");

    Route::delete("/delet/{house}", "delete")->name("houses.delete");
  
});



Route::group([
    "prefix" => "animals",
    "controller" => AnimalController::class
], function () {
    Route::get("/list", "list")->name("animals.list");
    Route::get("/create", "createForm")->name("animals.createForm");
    Route::get("/update/{animal}", "updateForm")->name("animals.updateForm");

    Route::post("/store", "store")->name("animals.store");
    
    Route::delete("/delete/{animal}", "delete")->name("animals.delete");
});
