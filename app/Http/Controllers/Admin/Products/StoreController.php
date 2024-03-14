<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;

class StoreController extends Controller
{
  public function __invoke(StoreRequest $request)
  {
    $data = $request->validated();
    
    $this->service->store($data);
    
  return redirect()->route('admin.products.index');
  }
}
