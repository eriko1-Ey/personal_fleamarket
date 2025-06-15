<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;
use App\Models\Message;
use App\Models\Review;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'buyer_id',
        'seller_id',
        'is_finished',
    ];

    //chatとuser(多対1)_buyer
    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    //chatとuser(多対1)_seller
    public function seller()
    {
        return $this->belongsTo(User::class, 'seller');
    }

    //chatとproduct(1対1)
    public function product()
    {
        return $this->belongsTo(product::class);
    }

    //chatとmessage(1対多)
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    //chatとreview(1対多)
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
