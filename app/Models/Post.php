<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
        'userID',
        'image',
    ];
    protected $table = 'posts';
    public function user(){
            return $this->belongsTo(User::class,"userID");
    }
    public function comment()
    {
        return $this->hasMany(Comment::class,"postID");
    }
    public function likes(){
        return $this->hasMany(Like::class,"postID");
    }
}
