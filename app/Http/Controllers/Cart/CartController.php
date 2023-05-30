<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function viewCart(){
        $items=session('cart'); 
        dd($items); 
        if($items){
        }
        return view('cart.view' , ['items'=>$items]);
    }
    public function addToCart(Request $request){
        //add items using session
        if(session()->has('cart')){
            $cart= session('cart');
            $cart[]=$request->toArray(); 
            session()->put('cart', $cart); 
        }else{
            session(['cart'=>[$request->toArray()]]); 
        }; 
        return redirect(route('home')); 
    }
}
