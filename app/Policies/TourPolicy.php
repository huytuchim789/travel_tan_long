<?php

namespace App\Policies;

use App\Model\admin\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class TourPolicy
{
    use HandlesAuthorization;


    /**
     * Determine whether the user can create tours.
     *
     * @param  \App\Model\user\User  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == 10) {
                    return true;
                }
            }
        }
        return true;
    }

    /**
     * Determine whether the user can update the tour.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Tour  $tour
     * @return mixed
     */
    public function update(Admin $user)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == 11) {
                    return true;
                }
            }
        }
        return true;
    }

    /**
     * Determine whether the user can delete the tour.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Tour  $tour
     * @return mixed
     */
    public function delete(Admin $user)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == 12) {
                    return true;
                }
            }
        }
        return true;
    }

    /**
     * Determine whether the user can restore the tour.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Tour  $tour
     * @return mixed
     */
    public function publish(Admin $user)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == 13) {
                    return true;
                }
            }
        }
        return true;
    }

    /**
     * Determine whether the user can permanently delete the tour.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Tour  $tour
     * @return mixed
     */
    public function tour_guide(Admin $user)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == 18) {
                    return true;
                }
            }
        }
        return true;
    }
}
