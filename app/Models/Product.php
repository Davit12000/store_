<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    protected $guarded = false;
    use SoftDeletes;
    use HasFactory;
    public function users(){
        return $this->belongsToMany(User::class, 'Baskets', 'product_id', 'user_id')->withPivot([
            'product_count'
        ]);
    }
}
