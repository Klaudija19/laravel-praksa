<?php

namespace App\Mail;

use App\Models\JobListing;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class JobPosted extends Mailable
{
    use Queueable, SerializesModels;

    public JobListing $job;

    public function __construct(JobListing $job)
    {
        $this->job = $job;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your job is now live 🎉',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.job-posted',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
