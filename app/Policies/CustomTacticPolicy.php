<?php

namespace App\Policies;

use App\User;
use App\CustomTactic;
use Illuminate\Auth\Access\HandlesAuthorization;

class CustomTacticPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the custom tactic.
     *
     * @param  \App\User  $user
     * @param  \App\CustomTactic  $customTactic
     * @return mixed
     */
    public function view(User $user, CustomTactic $customTactic)
    {
        return $user->id === $customTactic->user_id;
    }

    /**
     * Determine whether the user can create custom tactics.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the custom tactic.
     *
     * @param  \App\User  $user
     * @param  \App\CustomTactic  $customTactic
     * @return mixed
     */
    public function update(User $user, CustomTactic $customTactic)
    {
        //
    }

    /**
     * Determine whether the user can delete the custom tactic.
     *
     * @param  \App\User  $user
     * @param  \App\CustomTactic  $customTactic
     * @return mixed
     */
    public function delete(User $user, CustomTactic $customTactic)
    {
        //
    }

    /**
     * Determine whether the user can restore the custom tactic.
     *
     * @param  \App\User  $user
     * @param  \App\CustomTactic  $customTactic
     * @return mixed
     */
    public function restore(User $user, CustomTactic $customTactic)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the custom tactic.
     *
     * @param  \App\User  $user
     * @param  \App\CustomTactic  $customTactic
     * @return mixed
     */
    public function forceDelete(User $user, CustomTactic $customTactic)
    {
        //
    }
}
