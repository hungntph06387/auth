<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    public function index(){

        $products = Product::all();
        return view('product-list',  compact('products'));
    }

    public function create(){

        Gate::authorize('create-product');
        return view('product-create');
    }
}
