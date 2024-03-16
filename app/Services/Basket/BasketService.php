<?php
namespace App\Services\Basket;

use App\Models\Basket;
use App\Models\Product;
use App\Models\User;

class BasketService
{
    public function update($data){
        $user = auth()->user();
        $arr = ['user_id' => $user->id, 'product_id' => $data['product_id'], 'product_count' => $data['count']];
        Basket::updateOrCreate(
            [
                'user_id' => $user->id,
                'product_id' => $data['product_id']
            ],
$arr);
    }
    public function remove($id){
        $userid = auth()->user()->id;
        $productInBasket = Basket::where('product_id', $id)->where('user_id', $userid)->first();
        $productInBasket->delete();
    }
    
    public function buy(){
        $user = auth()->user();
    $basketProducts = Basket::where('user_id', $user->id)->get();
    foreach($basketProducts as $basketProduct){
$product = Product::find($basketProduct['product_id']);
$product -> update([
'count' => $product->count - $basketProduct['product_count']
]);
$basketProduct->delete();
    };
    }
}
?>