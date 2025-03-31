<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TaskPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        if ($user->hasPermissionTo("Access Tasks") || $user->hasRole(["Admin"])) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Task $Task)
    {
        if ($user->hasPermissionTo("View Tasks") || $user->hasRole(["Admin"])) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        if ($user->hasPermissionTo("Create Tasks") || $user->hasRole(["Admin"])) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Task $Task)
    {
        if ($user->hasPermissionTo("Update Tasks") || $user->hasRole(["Admin"])) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Task $Task)
    {
        if ($user->hasPermissionTo("Delete Tasks") || $user->hasRole(["Admin"])) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Task $Task)
    {
        if ($user->hasRole(["Admin"])) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Task $Task)
    {
        if ($user->hasRole(["Admin"])) {
            return true;
        }
        return false;
    }
}
