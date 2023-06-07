<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\customers;

class customerController extends Controller
{
    
    public function index(){
        // $customer = DB::table('customer')->select('ID', 'name')->get();
        $products = DB::select('select * from product');
        return view('products')->with('products', $products);
    }
    public function AddToCart($ID){
        $product = DB::select('select * from product where ID = '.$ID);
        return view('product')->with('product',$product);
    }
    public function viewCategory($category){
        $products = DB::select("select * from product where category= '" . $category. "'");
        return view('products')->with('products', $products);
    }

}
