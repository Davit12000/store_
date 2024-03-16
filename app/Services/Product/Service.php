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
        if(isset($data['image'])){
            if(file_exists(public_path('uploads/'.$product->image))){
                unlink(public_path('uploads/'.$product->image));
                }
            $file = $data['image'];
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
            $data['image'] = $fileName;
        }
        $product->update($data);
        
    }
    
}
?>