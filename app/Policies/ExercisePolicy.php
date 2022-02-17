<?php

namespace App\Policies;

use App\Models\Exercise;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ExercisePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the given exercise can be updated by the user.
     *
     * @param  \App\User  $user
     * @param  \App\Exercise  $exercise
     * @return bool
     */
    public function create(User $user)
    {
        if (!$user->personal) {
            return true;
        }
        return false;
    }

    public function before($user, $ability)
    {
        dd($user);
        if (!$user->personal) {
            return true;
        }
        return false;
    }
}
