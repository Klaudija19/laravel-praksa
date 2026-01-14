<?php

namespace App\Policies;

use App\Models\JobListing;
use App\Models\User;

class JobListingPolicy
{
    public function update(User $user, JobListing $job)
    {
        return $job->employer->user_id === $user->id;
    }

    public function delete(User $user, JobListing $job)
    {
        return $job->employer->user_id === $user->id;
    }
}
