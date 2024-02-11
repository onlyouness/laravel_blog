<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'postID',
        'userID',
    ];
    protected $table = 'comments';
    public function comment(){
            return $this->belongsTo(Post::class,"postID");
    }
    public function user(){
        return $this->belongsTo(User::class,"userID");
}
}
