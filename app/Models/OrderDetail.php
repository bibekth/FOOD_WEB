<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable=[
        'order_id',
        'price_id',
        'quantity',
        'total_amount'
    ];

    public function order(){
        return $this->belongsTo(Order::class,'order_id');
    }

    public function price(){
        return $this->belongsTo(FoodPrice::class,'price_id');
    }
}
