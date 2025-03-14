<?php

namespace App\Policies;

use App\Models\User;

class ArticlePolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, Article $article)
{
    return $user->id === $article->user_id || $user->hasRole('admin');
}

}
