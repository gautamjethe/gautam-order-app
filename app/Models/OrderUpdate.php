<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderUpdate extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'changes',
    ];

    protected $casts = [
        'changes' => 'array', 
    ];
    public $timestamps = true;
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}

