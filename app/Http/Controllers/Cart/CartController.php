<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function viewCart(){
        return "view Cart "; 
    }
    public function addToCart(Request $request){
        return "add to cart";
    }
}
