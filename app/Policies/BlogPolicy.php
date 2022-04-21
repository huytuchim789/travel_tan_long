<?php

namespace App\Policies;

use App\Model\admin\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class BlogPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can create blogs.
     *
     * @param  \App\Model\user\User  $user
     * @return mixed
     */
    public function create(Admin $user)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == 4) {
                    return true;
                }
            }
        }
        return true;
    }

    /**
     * Determine whether the user can update the blog.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Blog  $blog
     * @return mixed
     */
    public function update(Admin $user)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == 5) {
                    return true;
                }
            }
        }
        return true;
    }

    /**
     * Determine whether the user can delete the blog.
     *
     * @param  \App\Model\user\User  $user
     * @param  \App\Blog  $blog
     * @return mixed
     */
    public function delete(Admin $user)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == 6) {
                    return true;
                }
            }
        }
        return true;
    }

    public function publish(Admin $user)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == 7) {
                    return true;
                }
            }
        }
        return true;
    }

    public function category(Admin $user)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == 8) {
                    return true;
                }
            }
        }
        return true;
    }


    public function tag(Admin $user)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == 9) {
                    return true;
                }
            }
        }
        return true;
    }


}
