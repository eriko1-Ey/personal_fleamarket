<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'image_path'
    ];

    //productImageとproduct(多対1)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
