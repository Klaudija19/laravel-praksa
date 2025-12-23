<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    protected $table = 'job_listings';

    protected $fillable = [
        'title',
        'salary',
        'employer_id',
    ];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}

