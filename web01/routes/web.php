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
    return redirect('porfolio');
});

route::get('porfolio',function(){
    $porfolio = porfolio::all();
    return view('porfolio')->with('porfolio',$porfolio);
});
route::post('porfolio_back',"porfolioController@signInProcess");
route::get('porfolio_back',"porfolioController@auth");

route::get('sign_out',function(){
    session()->forget('name');
    return redirect('porfolio');
});

route::prefix('porfolio')->group(function(){
    route::get('create',function(){
        return view('create');
    });
    route::post('create','porfolioController@createProcess');
    route::get('edit-in',function(){
        $in = introduction::all();
        return view('introduction',['content'=>$in[0]->content,'img'=>$in[0]->img]);
    });
    route::post('edit-in','porfolioController@editInProcess');
});