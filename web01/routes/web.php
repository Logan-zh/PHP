<?php

use Illuminate\Support\Facades\Route;
use App\porfolio;
use App\introduction;
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

route::fallback(function(){
    $introduction = introduction::all();
    return redirect('porfolio')->with('introduction',$introduction);
});

route::get('porfolio',function(){
    $porfolio = porfolio::all();
    $introduction = introduction::all();
    return view('porfolio')->with('porfolio',$porfolio)->with('introduction',$introduction);
});
route::post('porfolio_back',"porfolioController@signInProcess");
route::get('porfolio_back',"porfolioController@auth")->middleware('auth');

route::get('sign_out',function(){
    session()->forget('name');
    return redirect('porfolio');
});

route::prefix('porfolio')->group(function(){
    route::get('create',function(){
        return view('create');
    })->middleware('auth');
    route::post('create','porfolioController@createProcess')->middleware('auth');

    route::post('edit-in','porfolioController@editInProcess')->middleware('auth');
});