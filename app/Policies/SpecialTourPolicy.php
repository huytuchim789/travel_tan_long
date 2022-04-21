<?php

namespace App\Policies;

use App\Model\admin\Admin;
use App\Model\user\TourSpecial;
use Illuminate\Auth\Access\HandlesAuthorization;

class SpecialTourPolicy
{
    use HandlesAuthorization;
    

    /**
     * Determine whether the user can create tour specials.
     *
     * @param  \App\Model\user\User  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == 14) {
                    return true;
                }
            }
        }
        return true;
    }

    /**
     * Determine whether the user can update the tour special.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\TourSpecial  $tourSpecial
     * @return mixed
     */
    public function update(Admin $user)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == 15) {
                    return true;
                }
            }
        }
        return true;
    }

    /**
     * Determine whether the user can delete the tour special.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\TourSpecial  $tourSpecial
     * @return mixed
     */
    public function delete(Admin $user)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == 16) {
                    return true;
                }
            }
        }
        return true;
    }

    /**
     * Determine whether the user can permanently delete the tour special.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\TourSpecial  $tourSpecial
     * @return mixed
     */
    public function publish(Admin $user)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == 17) {
                    return true;
                }
            }
        }
        return true;
    }
}
