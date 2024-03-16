<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;

class AdminController extends Controller
{
  public function __invoke()
  {
    $count = count(Product::all());
    return view('admin.home', compact('count'));
  }
}
