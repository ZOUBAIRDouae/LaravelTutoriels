<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Video extends Model
{
    protected $fillable = ['title'];

    public function comments(){
        return $this->morphMany(Comment::class , 'commentable');
    }
}
