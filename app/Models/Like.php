<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $fillable = [
        'postID',
        'userID',
    ];
    protected $table = 'likes';
    public function comment()
    {
        return $this->belongsTo(Post::class, "postID");
    }
    public function user()
    {
        return $this->belongsTo(User::class, "userID");
    }
}
