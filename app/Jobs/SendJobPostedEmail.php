<?php

namespace App\Jobs;

use App\Mail\JobPosted;
use App\Models\JobListing;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendJobPostedEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $jobListing;
    public $userEmail;

    public function __construct(JobListing $jobListing, $userEmail)
    {
        $this->jobListing = $jobListing;
        $this->userEmail = $userEmail;
    }

    public function handle(): void
    {
        Mail::to($this->userEmail)
            ->send(new JobPosted($this->jobListing));
    }
}

