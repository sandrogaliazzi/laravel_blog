<?php

namespace App\Policies;

use App\User;
use App\Coment;
use Illuminate\Auth\Access\HandlesAuthorization;

class ComentPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function update(User $user, Coment $coment)
    {
        return $user->id === $coment->author_id;
    }
}
