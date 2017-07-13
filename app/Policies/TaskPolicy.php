<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use app\User;
use app\Task;


class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct(User $user,Task $task)
    {
        return $user->id === $task->user_id;
    }
}
