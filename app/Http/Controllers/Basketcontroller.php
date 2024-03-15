<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function __invoke()
  {
    $products = auth()->user()->products;
    return view('user.basket.basket', compact('products'));
  }
}
