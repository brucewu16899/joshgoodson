<?php

namespace JoshGoodson\Repositories;

use JoshGoodson\User;
use JoshGoodson\Task;

class TaskRepository
{
  /**
   * Get all of the tasks for a given user.
   *
   * @param User $user
   * @return Collection
   */
  public function allForUser(User $user)
  {
      return Task::where('user_id', $user->id)
                  ->orderBy('id', 'desc')
                  ->paginate(10);
  }

  /**
   * Get a single task for a given user.
   *
   * @param User $user
   * @return Collection
   */
  public function oneForUser(User $user, Task $task)
  {
      return Task::where('user_id', $user->id)
                  ->findOrFail($task->id);
  }
}
