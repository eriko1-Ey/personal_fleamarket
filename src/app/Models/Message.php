<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\user;
use App\Models\Chat;

class Message extends Model
{
    use HasFactory;

    protected $fiilable = [
        'chat_id',
        'user_id',
        'content',
        'image_path',
        'is_read',
        'is_edited',
    ];

    //messageとuser(多対1)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //messageとchat(多対1)
    public function chat()
    {
        return $this->belongsTo(Chat::class);
    }
}
