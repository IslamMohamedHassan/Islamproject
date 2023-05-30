<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = ProductModel::get(); 
        return view('home.index', ['products'=>$products]); 
    }
}
