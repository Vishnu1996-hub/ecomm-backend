<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function addProduct(Request $req){
        $product = new Product;
        $product->name =  $req->name;
        $product->description = $req->description;
        $product->price = $req->price;
        $product->file_path = $req->file('file')->store('products');
        $product->save();
        return $product;
    }

    function productList(){
        return Product::all();
    }
}
