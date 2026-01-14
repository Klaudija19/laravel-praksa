<?php

namespace App\Providers;

use App\Models\JobListing;
use App\Policies\JobListingPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        JobListing::class => JobListingPolicy::class,
    ];

    public function boot(): void
    {
        //
    }
}
