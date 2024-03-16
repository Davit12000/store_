<?php

namespace App\Http\Controllers\Basket;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;

class BasketController extends Controller
{
    public function __invoke()
  {
    $user = auth()->user();
   $products = $user->products;
    return view('user.basket.basket', compact('products'));
  }
}
