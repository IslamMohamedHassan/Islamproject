<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function viewProduct(Request $request){
        $product = ProductModel::where('id', $request->id)->first(); 
        return view('product.view' , ['product'=>$product]) ;
    }
}
