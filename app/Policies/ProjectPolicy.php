<?php

namespace App\Policies;

use App\Models\Project;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProjectPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        if ($user->hasPermissionTo("Access Projects") || $user->hasRole(["Admin"])) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Project $Project)
    {
        if ($user->hasPermissionTo("View Projects") || $user->hasRole(["Admin"])) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        if ($user->hasPermissionTo("Create Projects") || $user->hasRole(["Admin"])) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Project $Project)
    {
        if ($user->hasPermissionTo("Update Projects") || $user->hasRole(["Admin"])) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Project $Project)
    {
        if ($user->hasPermissionTo("Delete Projects") || $user->hasRole(["Admin"])) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Project $Project)
    {
        if ($user->hasRole(["Admin"])) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Project $Project)
    {
        if ($user->hasRole(["Admin"])) {
            return true;
        }
        return false;
    }
}
