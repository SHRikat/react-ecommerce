<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productInfo;

class insertcontroller extends Controller
{
    public function index(){
        return view('insertproduct');
    }
    public function submitinfo(Request $request){
        //dd($request);
      
        $product_info=new productInfo();
        $product_info->name=$request->name;
        $product_info->description=$request->description;
        $product_info->price=$request->price;
        $product_info->save();

        return redirect('/insert');  
    }
    public function viewinfo(){
       $info=productInfo::all();
       return view('viewproduct',compact('info'));
       
    }
}
