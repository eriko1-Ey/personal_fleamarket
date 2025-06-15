<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;
use App\Models\ProductImage;
use App\Models\Comment;
use App\Models\Purchase;
use App\Models\Like;
use App\Models\Chat;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'price',
        'is_sold',
        'condition',
        'brand',
    ];

    //productとuser(多対1)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //productとcategory(多対多)_中間テーブル使用
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_category');
    }

    //productとproductImage(1対多)
    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }

    //productとcomment(1対多数)
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    //productとpurchase(1対1)
    public function purchase()
    {
        return $this->hasOne(Purchase::class);
    }

    //productとlike(1対多)
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    //productとchat(1対1)
    public function chat()
    {
        return $this->hasOne(Chat::class);
    }
}
