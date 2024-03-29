<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'menu_id'];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
    
    public function order()
    {
        return $this->belongsToMany(Order::class);
    }
}
