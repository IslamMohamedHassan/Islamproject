<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function viewCart(){
        $items=session('cart'); 
        $products= []; 
        if($items){
            foreach($items as $item){
                $product= ProductModel::where('id', $item['id'])->first(); 
                $product['size']=$item['size']; 
                $products[]=$product; 
            }
        }
        $sizes=['XS','S','M','L','XL','XXL','XXXL'];         
        return view('cart.view' , [
            'products'=>$products,
            'sizes'=>$sizes
            ]);
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
    public function removeCartItem(Request $request){
        $items = session('cart'); 
        $items= array_values($items) ; 
        if ($items){
            unset($items[$request->index]);
        }
        session(['cart'=>$items]); 
        return back(); 
    }
}
