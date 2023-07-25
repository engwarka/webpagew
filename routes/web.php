<?php


use App\Http\Controllers\fatoraController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EradatController;
use App\Http\Controllers\HandController;
use App\Http\Controllers\kashafController;
use App\Http\Controllers\keradatController;
use App\Http\Controllers\suberadateController;
use App\Http\Controllers\subfatoraController;

use App\Http\Controllers\SandokController;
use App\Http\Controllers\tasdedController;

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
    return view('website.index');
});


Route::get('/home', function () {
    return view('website.main');
});

Route::get('/website.er_contain', function () {
    return view('website.er_contain');
});

Route::get('/website.mashtarate', function () {
    return view('website.mashtarate');
});


Route::get('/website.fatorahand', function () {
    return view('website.fatorahand');
});

Route::get('/website.subfatora', function () {
    return view('website.subfatora');
});

Route::get('/website.forms', function () {
    return view('website.forms');
});

Route::get('/website.formstesaed', function () {
    return view('website.formstesaed');
});
Route::get('/website.submain', function () {
    return view('website.submain');
});

Route::get('/website.kfatora_contain', function () {
    return view('website.kfatora_contain');
});

Route::get('/website.kashafmain', function () {
    return view('website.kashafmain');
});


Route::get("/website/{subfatora_id}/delete",[subfatoraController::class,"delete"])->name("subfatora.delete");
Route::get("/website/{fatora_id}/delete/fatora",[fatoraController::class,"delete"])->name("fatora.delete");
Route::get("/website/{kashaf_id}/delete/kashaf",[kashafController::class,"delete"])->name("kashaf.delete");
Route::get("/website/{tasded_id}/delete/tasded",[tasdedController::class,"delete"])->name("tasded.delete");

Route::get('/website.kashf', function () {
    return view('website.kashf');
});
Route::get('/website.suberadat',[suberadateController::class,"contain"]);

Route::get('/website.eradate',[EradatController::class,"index"]);
Route::get('/website.kashaferadat',[keradatController::class,"main"]);
Route::get('/website.sandok',[SandokController::class,"main"]);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/submit',[fatoraController::class,"storeaccount"])->name("store.fatora");
Route::post('/subpart',[subfatoraController::class,"substore"])->name("substore.fatora");
Route::post('/tasded',[tasdedController::class,"substoretasdes"])->name("substore.tasded");
Route::post('/subparthand',[HandController::class,"substorehand"])->name("substore.fatorahand");
Route::post('/subsubmit',[kashafController::class,"kashstore"])->name("substore.kashaf");
Route::get("db",function(){
$db = DB::table("blogs")
->join("users","blogs.user_id","users.id")
->select(["blogs.id","blogs.title","blogs.photo","blogs.slug","blogs.total_views","blogs.total_likes","users.name"])->get();
return $db;
});

    require __DIR__.'/auth.php';
