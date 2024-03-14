<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function __invoke()
  {
    $products = Product::all();
    $count = count($products);
    return view('admin.products.index', compact('products', 'count'));
  }
}
