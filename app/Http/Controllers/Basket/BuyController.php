<?php

namespace App\Http\Controllers\Basket;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use App\Models\Product;
use App\Models\User;

class BuyController extends Controller
{
    public function __invoke()
  {
    $this->basketService->buy();
    dump('Succesfuly buyed some products');
    return redirect()->route('basket');
  }
}
