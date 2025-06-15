<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;


class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
    ];

    //purchaseとuser(多対1)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //purchaseとproduct(1対1)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
