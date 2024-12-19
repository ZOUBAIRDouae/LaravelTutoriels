<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [name , bio , photo];

    public function user(){
        return this->belobstoMany(User::class);
    }
}
