<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\product;
use App\Models\Comment;
use App\Models\Purchase;
use App\Models\Like;
use App\Models\Payment;
use App\Models\Message;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_image',
        'post_code',
        'address',
        'building',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //userとproduct(1対多)
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    //userとcomment(1対多)
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    //userとpurchase(1対多)
    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    //userとlike(1対多)_likeモデル（中間デーブルのレコード）を直接取得する役割
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    //userとpayment(1対多)
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    //user-like-product(多対多)_”いいねしたproductモデル（商品）”を取得する
    public function likedProducts()
    {
        return $this->belongsToMany(Product::class, 'likes')->withTimestamps();
    }

    //userとmessage(1対多)
    public function sentMessages()
    {
        return $this->hasMany(Message::class);
    }

    //userとreview(1対多)_レビューを書いた一覧
    public function reviewsGiven()
    {
        return $this->hasMany(Review::class, 'reviewer_id');
    }

    //userとreview(1対多)_レビューを受けた一覧
    public function reviewsReceived()
    {
        return $this->hasMany(Review::class, 'reviewee_id');
    }

    //ユーザーが受け取ったレビューの平均評価を計算する
    public function averageRating()
    {
        return $this->reviewsReceived()->avg('rating');
    }
}
