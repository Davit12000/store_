<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;

class EditController extends Controller
{
  public function __invoke(Product $product)
  {
    $count = count(Product::all());
    return view('admin.products.edit', compact('product', 'count'));
  }
}
