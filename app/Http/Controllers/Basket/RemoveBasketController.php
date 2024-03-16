<?php

namespace App\Http\Controllers\Basket;

use App\Http\Controllers\Controller;
use App\Http\Requests\Basket\RemoveRequest;
use App\Models\Basket;
use App\Models\Product;
use App\Models\User;

class RemoveBasketController extends Controller
{
    public function __invoke($id)
  {
    $this->basketService->remove($id);
    return redirect()->route('basket');
  }
}
