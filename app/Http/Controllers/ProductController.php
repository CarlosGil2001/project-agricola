<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = HTTP::get('127.0.0.1:8070/api/v2/products');
        $productsArray = $products->json();
        return view('product.list',compact('productsArray'));
    }
}
