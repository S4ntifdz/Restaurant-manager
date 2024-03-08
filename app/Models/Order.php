<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['tableclient_id', 'status'];

    public function items()
    {
        return $this->belongsToMany(Item::class)->withPivot('quantity');
    }
    public function tableclient()
    {
        return $this->belongsTo(Tableclient::class);
    }
}