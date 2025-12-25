<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    protected $fillable = [
        'order_id',
        'menu_id',
        'quantity'
    ];

    public function Menu(){
        return $this->belongsTo(Menu::class);
    }

    public function Oreder(){
        return $this->belongsTo(Order::class);
    }
}
