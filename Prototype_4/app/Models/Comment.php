<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content' , 'commentable_id' , 'commentable_type'];

    public function commentable(){
        return $this->morphTo(); //morphTo() is used to define a polymorphic one-to-many relationship.
    }

     // Définition de la portée pour récupérer les derniers commentaires
    public function scopLatest(){
        return $query->orderBy('created_at' , 'desc');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
