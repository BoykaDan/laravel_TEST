<?php
/**
 * Created by PhpStorm.
 * User: xiii_
 * Date: 2017/7/13
 * Time: 14:15
 */


namespace app\Repositories;
use app\Task;
use app\User;

class TaskRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return Task::where('user_id', $user->id)
            ->orderBy('created_at', 'asc')
            ->get();
    }

}