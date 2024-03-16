<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;

class DestroyController extends Controller
{
  public function __invoke(Product $product)
  {
    if(file_exists(public_path('uploads/'.$product->image))){
      unlink(public_path('uploads/'.$product->image));
      }
    $product->delete();
        return redirect()->route('admin.products.index');
  }
}
