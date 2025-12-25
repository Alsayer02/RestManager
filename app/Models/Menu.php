<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name',
        'category',
        'description',
        'price'
    ];
    public function oredr_item()
    {
        return $this->hasMany(Order_item::class);
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
