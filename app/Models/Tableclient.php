<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tableclient extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'status'];
    public function order()
    {
        return $this->hasOne(Order::class);
    }

}
