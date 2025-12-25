<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'image',
        'menu_id'
    ];
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
