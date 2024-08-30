<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class JobPolicy
{
    use HandlesAuthorization;
  public function edit(User $user, Job $job){
        return $job->employer->user->is($user);
  }
}
