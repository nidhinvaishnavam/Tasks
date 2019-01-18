<?php

namespace App\Policies;

use App\User;
use App\Beverage;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the beverage.
     *
     * @param  \App\User  $user
     * @param  \App\Beverage  $beverage
     * @return mixed
     */
    public function view(User $user, Beverage $beverage)
    {
        //
    }

    /**
     * Determine whether the user can create beverages.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the beverage.
     *
     * @param  \App\User  $user
     * @param  \App\Beverage  $beverage
     * @return mixed
     */
    public function update(User $user, Beverage $beverage)
    {
   return $beverage->owner_id==$user->id||$user->id==1;
    }

    /**
     * Determine whether the user can delete the beverage.
     *
     * @param  \App\User  $user
     * @param  \App\Beverage  $beverage
     * @return mixed
     */
    public function delete(User $user, Beverage $beverage)
    {
        //
    }

    /**
     * Determine whether the user can restore the beverage.
     *
     * @param  \App\User  $user
     * @param  \App\Beverage  $beverage
     * @return mixed
     */
    public function restore(User $user, Beverage $beverage)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the beverage.
     *
     * @param  \App\User  $user
     * @param  \App\Beverage  $beverage
     * @return mixed
     */
    public function forceDelete(User $user, Beverage $beverage)
    {
        //
    }
}
