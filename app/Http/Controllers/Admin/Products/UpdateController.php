<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;

class UpdateController extends Controller
{
  public function __invoke(UpdateRequest $request, Product $product)
  {
    $data = $request->validated();
    $this->service->update($product, $data);
    return redirect()->route('admin.products.index');
  }
}
