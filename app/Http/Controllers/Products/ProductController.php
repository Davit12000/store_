<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __invoke()
  {
    $products = Product::paginate(10);
    return view('products.index', compact('products'));
  }
}
