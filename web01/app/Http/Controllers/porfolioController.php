<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\porfolio;

class porfolioController extends Controller
{
    function signInProcess (Request $request){
        $name = $request->name;
        if(User::where('name',$name)->first()){
            echo "ok";
        }else{
            echo "fails";
        }
    }
}
