<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $guarded = [];

    public function category (){
        return $this->belongsTo(Category::class,"category_id");
    }

    public function user (){
        return $this->belongsTo(User::class,"user_id");
    }


    public function order (){
        return $this->hasMany(Order::class);
    }
}
