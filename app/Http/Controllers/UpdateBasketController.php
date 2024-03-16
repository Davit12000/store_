<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Basket\BasketRequest;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateBasketController extends Controller
{
    public function __invoke(BasketRequest $request)
  {
    $data = $request->validated();
    $this->basketService->update($data);
    return redirect()->route('basket');
    
  }
}
