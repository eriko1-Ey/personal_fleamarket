<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Chat;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'chat_id',
        'reviewer_id',
        'reviewee_id',
        'rating',
        'comment'
    ];

    //reviewとuser(多対1)_reviewer
    public function reviewer()
    {
        return $this->belongsTo(User::class, 'reviewer_id');
    }

    //reviewとuser(多対1)_reviewee
    public function reviewee()
    {
        return $this->belongsTo(User::class, 'reviewee_id');
    }

    //reviewとchat(多対1)
    public function chat()
    {
        return $this->belongsTo(Chat::class);
    }
}
