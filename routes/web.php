<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mcon;
use App\Http\Controllers\Procon;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
route::view('/login','login');

route::get('/',[Mcon::class,'Mfun']);

route::post('/login',[Mcon::class,'login']);
route::get('/home',[Procon::class,'index']);

route::get('/detail/{detail}',[Procon::class,'detail']);
route::get('/search',[Procon::class,'search']);
route::post('/addtocart',[Procon::class,'addtocart']);


route::get('/logout',[Mcon::class,'logout']);



