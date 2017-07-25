<?php

namespace App\Repositories;

use App\user;

class TaskRepository
{

	public function forUser(User $user)
	{
		return $user->tasks()->orderBy('created_at','asc')->get();
	}

}