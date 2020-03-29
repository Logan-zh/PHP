<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\porfolio;
use App\introduction;

class porfolioController extends Controller
{
    function signInProcess (Request $request){
        $name = $request->name;
        $password = $request->password;
        if(User::where('name',$name)->where('password',$password)->first()){
            session()->put('name',$name);
            $porfolio = porfolio::all();
            $in = introduction::all();
            return view('porfolioBack')->with('porfolio',$porfolio)->with('introduction',$in);
        }else{
            echo "fails";
        }
    }

    function auth (){
        if(session()->has('name')){
            $porfolio = porfolio::all();
            $in = introduction::all();
            return view('porfolioBack')->with('porfolio',$porfolio)->with('introduction',$in);
        }else{
            return redirect('porfolio');
        }
    }

    function createProcess (Request $request){
        $title = $request->title;
        $content = $request->content;
        $imgName = $request->file('img')->getclientoriginalname();
        $siteName = $request->file('site')->getclientoriginalname();
        $request->file('img')->storeAS('public/img',$imgName);
        $request->file('site')->storeAS('public/site',$siteName);
        $request->img = $imgName;
        $request->site = $siteName;
        
        porfolio::create(['name'=>$title,'content'=>$content,'img'=>$imgName,'site'=>$siteName]);
    }
    function editInProcess (Request $request){

        $in = introduction::find(1);
        $in->content = $request['content'];
        if($request->file('img')){
            $imgName = $request->file('img')->getclientoriginalname();
            $request->file('img')->storeAs('public/img',$imgName);
            $in->img = $imgName;
        }else{
            $in->img = "NULL";
        }
        $in->save();
        return redirect('porfolio');
        // echo $request['content'].$request['img'];
    }
}
