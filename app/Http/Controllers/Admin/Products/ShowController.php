<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Product;

class ShowController extends Controller
{
  public function __invoke(Product $product)
  {
    $count = count(Product::all());
    return view('admin.products.show', compact('product', 'count'));
  }
}
