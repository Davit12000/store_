<?php

namespace App\Http\Controllers;

use App\Services\Product\Service;
use App\Services\Basket\BasketService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public $service;
    public $basketService;
    use AuthorizesRequests, ValidatesRequests;
    public function __construct(Service $service, BasketService $basketService)
    {
        $this->service = $service;
        $this->basketService = $basketService;
    }
}
