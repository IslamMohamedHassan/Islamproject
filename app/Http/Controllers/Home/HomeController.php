<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = ProductModel::get(); 
        return view('home.index', ['products'=>$products]); 
    }
    public function storeUserReview(Request $request){
        User::find(auth()->user()->id)->update([
            'review_rate'=>$request->rate, 
            'review'=>$request->review_text
        ]); 
        return redirect(route('home')); 
    }
}
