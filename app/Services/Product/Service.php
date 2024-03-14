<?php
namespace App\Services\Product;
use App\Models\Product;

class Service
{
    public function store($data){
        $data['image'] = $data['image']->getClientOriginalName();
        Product::create($data);
    }
    public function update($product, $data){
        $product->update($data);
    }
    
}
?>