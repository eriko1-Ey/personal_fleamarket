<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    //categoryとproduct(多対多)_中間テーブル使用
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_category');
    }
}
