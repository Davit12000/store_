<?php
namespace App\Services\Product;
use App\Models\Product;

class Service
{
    public function store($data){
        $file = $data['image'];
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('uploads'), $fileName);
        $data['image'] = $fileName;
        Product::create($data);
    }
    public function update($product, $data){
        $product->update($data);
    }
    
}
?>